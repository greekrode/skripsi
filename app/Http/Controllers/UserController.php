<?php

namespace App\Http\Controllers;

use App\Model\Award;
use App\Model\Country;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function search()
    {
        $users = User::all();
        return view('pages.search')->with('users', $users);
    }

    public function view($id)
    {
        $user = User::find($id);

        if ($user->type === 'user') {
            $country = Country::where('code', $user->country)->first();
            $award = Award::where('user_id', Auth::user()->id)->where('verified', 1)->get();
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
}
