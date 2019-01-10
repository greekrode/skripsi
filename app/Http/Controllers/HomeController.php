<?php

namespace App\Http\Controllers;

use App\Model\Country;
use App\Model\Faculty;
use App\Model\Major;
use App\User;
use Illuminate\Http\Request;

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
        return view('pages.home');
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
//        $validator = Validator::make($request->all(), [
//           'name' => ''
//        ]);

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
        $user->save();

        return redirect()->route('account.personal.edit', ['id' => $id]);
    }
}
