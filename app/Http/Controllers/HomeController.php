<?php

namespace App\Http\Controllers;

use App\Model\Country;
use App\Model\Faculty;
use App\Model\Major;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\ImageManagerStatic as Image;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $country = Country::where('code', $user->country)->first();

        $data = [
            'user' => $user,
            'country' => $country
        ];

        return view('pages.home')->with($data);
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
        $user->faculty_id = $request->faculty;
        $user->country = $request->country;
        $user->city = $request->city;
        $user->major_id = $request->major;
        $user->about = $request->about;
        $user->occupation = $request->occupation;
        $user->gender = $request->gender;
        $user->facebook = $request->facebook;
        $user->twitter = $request->twitter;
        $user->instagram = $request->instagram;
        $user->linked_in = $request->linked_in;

        if ($user->save()) {
            return redirect()->back()->with('success', 'Your information has been successfully updated!');
        } else {
            return redirect()->back()->with('error', 'Something is wrong. Please try again later!');
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

                return redirect()->back()->with('status',  'Password changed successfully !');
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
        Storage::disk('public')->put($image->getFilename().'.'.$extension, File::get($image));

        $user = User::find($id);
        $user->profile_mime = $image->getClientMimeType();
        $user->profile_original_image = $image->getClientOriginalName();
        $user->profile_image = $image->getFilename().'.'.$extension;
        $user->save();

        return redirect()->back();
    }
}
