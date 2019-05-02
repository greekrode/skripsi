<?php

namespace App\Http\Controllers;

use App\Model\Country;
use App\Model\EmploymentType;
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
        $types = EmploymentType::all();
        $data = [
            'countries' => $countries,
            'seniorities' => $seniorities,
            'types' => $types
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
        $job->description = $request->description;
        $job->industry = $request->industry;
        $job->type_id = $request->type;
        $job->end_date = date('Y-m-d', strtotime($request->datetimepicker));
        $job->user_id = Auth::user()->id;
        $job->save();

        Toastr::success('New job has been added!', 'Success');
        return redirect()->route('home');
    }

    public function edit($id)
    {
        $job = Job::find($id);
        $countries = Country::all();
        $seniorities = Seniority::all();
        $types = EmploymentType::all();
        $data = [
            'job' => $job,
            'countries' => $countries,
            'seniorities' => $seniorities,
            'types' => $types
        ];

        return view('pages.company.job.edit')->with($data);
    }

    public function update(Request $request, $id)
    {
        $job = Job::find($id);
        $job->title = $request->title;
        $job->city = $request->city;
        $job->country = $request->country;
        $job->seniority_id = $request->seniority;
        $job->description = $request->description;
        $job->industry = $request->industry;
        $job->type_id = $request->type;
        $job->end_date = date('Y-m-d', strtotime(str_replace('/', '-', $request->datetimepicker)));
        $job->save();

        Toastr::success('Job has been successfully edited', 'Success');
        return redirect()->route('home');
    }

    public function destroy($id)
    {
        $job = Job::find($id);
        if ($job) {
            $job->delete();
            Toastr::success('Job has been deleted!', 'Success');
        } else {
            Toastr::error('Job can not be deleted!', 'Error');
        }
        return redirect()->back();
    }

    public function show(Request $request)
    {
        $jobId = $request->get('jobId');

        $job = Job::find($jobId);
        $type = $job->type;
        $seniority = $job->seniority;

        $data = [
            $job,
            $type,
            $seniority
        ];


        return response($data);
    }
}
