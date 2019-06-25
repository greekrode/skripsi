<?php

namespace App\Http\Controllers;

use App\Model\Award;
use App\Model\Country;
use App\Model\Faculty;
use App\Model\Major;
use App\User;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Kamaln7\Toastr\Facades\Toastr;

class UserController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        if (Auth::user()->role_id === 1) {
            return redirect('/admin');
        }

        $user = Auth::user();
        $country = Country::where('code', $user->country)->first();

        if ($user->type === 'user') {
            $award = Award::where('user_id', Auth::user()->id)->where('verified', 1)->get();
            $data = [
                'user' => $user,
                'country' => $country,
                'point' => count($award)
            ];

            return view('pages.home')->with($data);
        }

        $data = [
            'user' => $user,
            'country' => $country,
        ];

        return view('pages.company.home')->with($data);

    }

    public function view($id)
    {
        $user = User::find($id);

        if ($user->type === 'user') {
            $country = Country::where('code', $user->country)->first();
            $award = Award::where('user_id', $id)->where('verified', 1)->get();
            $data = [
                'user' => $user,
                'country' => $country,
                'point' => count($award)
            ];

            return view('pages.user')->with($data);
        }

        $data = [
            'user' => $user
        ];

        return view('pages.company.home')->with($data);;
    }

    public function editPersonal($id)
    {
        $user = User::find($id);
        $countries = Country::all();
        $faculties = Faculty::all();
        $majors = Major::all();
        $selectedCountry = Country::where('code', $user->country)->first();
        $selectedFaculty = Faculty::where('id', $user->faculty_id)->first();
        $selectedMajor = Major::where('id', $user->major_id)->first();

        $data = [
            'user' => $user,
            'countries' => $countries,
            'faculties' => $faculties,
            'majors' => $majors,
            'selectedCountry' => $selectedCountry,
            'selectedFaculty' => $selectedFaculty,
            'selectedMajor' => $selectedMajor
        ];

        return view('pages.account.personal')->with($data);
    }

    public function updatePersonal(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => ['required'],
            'last_name' => ['required'],
            'phone_number' => ['required']
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = User::find($id);
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->phone_number = $request->phone_number;
        $user->birthday = $request->datetimepicker;
        $user->birthplace = $request->birthplace;
        $user->country = $request->country;
        $user->city = $request->city;
        $user->about = $request->about;
        $user->occupation = $request->occupation;
        $user->gender = $request->gender;
        $user->facebook = $request->facebook;
        $user->twitter = $request->twitter;
        $user->instagram = $request->instagram;
        $user->linked_in = $request->linked_in;

        if ($user->type === 'company') {
            $user->website = $request->website;
            $user->address = $request->address;
            $user->zip_code = $request->zip_code;
            $user->size = $request->size;
        } else if ($user->type === 'user') {
            $user->faculty_id = $request->faculty;
            $user->major_id = $request->major;
            $user->gpa = $request->gpa;
        }

        if ($user->save()) {
            Toastr::success('Your information has been successfully updated!', 'Success');
            return redirect()->back();
        } else {
            Toastr::error('Something is wrong. Please try again later!', 'Error');
            return redirect()->back();
        }
    }

    public function editPassword($id)
    {
        $user = User::find($id);
        $data = [
            'user' => $user
        ];

        return view('pages.account.password')->with($data);
    }

    public function updatePassword (Request $request, $id)
    {
        if (Auth::check()) {
            $requestData = $request->all();
            $validator= $this->validatePassword($requestData);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            } else {
                if (!Hash::check($request->current_password, Auth::user()->password)) {
                    // The passwords does not match
                    return redirect()->back()->with('error',  'Your current password does not matches with the password you provided. Please try again.');
                }

                if (strcmp($request->current_password, $request->password) == 0) {
                    // Current password and new password are same
                    return redirect()->back()->with('error',  'New password cannot be same as your current password. Please choose a different password.');
                }

                // Change Password
                $user = User::find($id);
                $user->password = Hash::make($request->password);
                $user->save();

                Toastr::success('Password successfully changed!', 'Success');

                return redirect()->back();
            }
        } else {
            return redirect('/');
        }
    }

    public function validatePassword(array $data)
    {
        $validator = Validator::make($data, [
            'current_password' => ['required'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);

        return $validator;
    }

    public function uploadProfilePhoto(Request $request, $id)
    {
        $image = $request->file('image');
        $extension = $image->getClientOriginalExtension();
        $allowedfileExtension = ['png','jpg','bmp'];
        $check = in_array($extension, $allowedfileExtension, true);

        if ( ($image->getSize() / 1000000) > 5 ) {
            Toastr::error('File size must not excdeed 5MB!', 'Fail');
            return redirect()->back();
        }

        if ($check) {
            Storage::disk('public')->put($image->getFilename().'.'.$extension, File::get($image));

            $user = User::find($id);
            $user->profile_mime = $image->getClientMimeType();
            $user->profile_original_image = $image->getClientOriginalName();
            $user->profile_image = $image->getFilename().'.'.$extension;
            $user->save();

            return redirect()->back();
        }

        Toastr::error('File extension must be jpg, png or bmp only', 'Fail');
        return redirect()->back();
    }
}
