<?php

namespace App\Http\Controllers;

use App\Model\Job;
use App\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function welcome()
    {
        if (Auth::check()) {
            if (Auth::user()->role_id === 1) {
                return redirect('/admin');
            }

            return redirect()->route('home');
        }

        return view('pages.welcome');
    }

    public function userSearch()
    {
        $users = User::all();
        return view('pages.search_user')->with('users', $users);
    }

    public function jobSearch()
    {
        $jobs = Job::where('end_date', '>', new \DateTime())->orderBy('created_at', 'DESC')->get();
        return view('pages.search_job')->with('jobs', $jobs);
    }
}
