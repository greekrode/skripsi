<?php

namespace App\Http\Controllers;

use App\Model\Country;
use App\Model\Job;
use App\Model\Seniority;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Kamaln7\Toastr\Facades\Toastr;

class JobController extends Controller
{
    public function create(Request $request)
    {
        $countries = Country::all();
        $seniorities = Seniority::all();
        $data = [
            'countries' => $countries,
            'seniorities' => $seniorities
        ];

        return view('pages.company.job.create')->with($data);
    }

    public function store(Request $request)
    {
        $job = new Job();
        $job->title = $request->title;
        $job->city = $request->city;
        $job->country = $request->country;
        $job->seniority_id = $request->seniority;
        $job->type = $request->type;
        $job->description = $request->description;
        $job->industry = $request->industry;
        $job->user_id = Auth::user()->id;
        $job->save();

        Toastr::success('New job has been added!', 'Success');
        return redirect()->route('home');
    }
}
