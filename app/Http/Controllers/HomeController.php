<?php

namespace App\Http\Controllers;

use App\Model\Job;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

        $topUsers = DB::table('users')
                    ->select(DB::raw('count(awards.id) as point, users.id, users.first_name, users.last_name, users.profile_image, users.email, users.city, users.country, awards.verified, users.about'))
                    ->join('awards', 'awards.user_id', '=', 'users.id')
                    ->where('awards.verified', '=', 1)
                    ->groupBy('users.id')
                    ->orderBy('point', 'DESC')
                    ->limit('6')
                    ->get();

        return view('pages.welcome')->with('topUsers', $topUsers);
    }

    public function userSearch()
    {
        $users = User::whereNotNull('email_verified_at')->where('type','user')->orderBy('created_at', 'DESC')->limit(10)->get();
        return view('pages.search_user')->with('users', $users);
    }

    public function jobSearch()
    {
        $jobs = Job::where('end_date', '>', new \DateTime())->orderBy('created_at', 'DESC')->limit(10)->get();
        return view('pages.search_job')->with('jobs', $jobs);
    }
}
