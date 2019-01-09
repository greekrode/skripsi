<?php

namespace App\Http\Controllers;

use App\Model\Country;
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
        $selectedCountry = Country::where('code', $user->country)->get();

        $data = [
            'user' => $user,
            'countries' => $countries,
            'selectedCountry' => $selectedCountry
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
    }
}
