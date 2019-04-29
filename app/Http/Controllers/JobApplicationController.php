<?php

namespace App\Http\Controllers;

use App\Model\JobApplication;
use App\Model\Job;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Kamaln7\Toastr\Facades\Toastr;

class JobApplicationController extends Controller
{
    public function index(Request $request)
    {
        if (Auth::user()->type === 'company') {
            $jobs = Job::where('user_id', Auth::user()->id)->get();
            return view('pages.company.application')->with('jobs', $jobs);
        }

        $jobApplicationsAccepted = JobApplication::where('user_id', Auth::user()->id)->where('accepted','1')->get();
        $jobApplicationsRejected = JobApplication::where('user_id', Auth::user()->id)->where('rejected','1')->get();
        $jobApplicationsPending = JobApplication::where('user_id', Auth::user()->id)->where('rejected','0')->where('accepted','0')->get();

        $data = [
            'jobApplicationsAccepted' => $jobApplicationsAccepted,
            'jobApplicationsRejected' => $jobApplicationsRejected,
            'jobApplicationsPending' => $jobApplicationsPending
        ];

        return view('pages.account.application')->with($data);
    }

    public function create(Request $request)
    {
        $description = $request->description;
        $job = Job::find($request->job_id);
        $user = User::find(Auth::user()->id);

        if ($request->hasFile('resume')) {
            $allowedfileExtension = ['pdf','jpg','png','docx'];
            $file = $request->file('resume');
            $extension = $file->getClientOriginalExtension();
            $check = in_array($extension, $allowedfileExtension, true);

            if ($check) {
                $filename = $file->store('resume');

                $jobApplication = new \App\Model\JobApplication();
                $jobApplication->description = $description;
                $jobApplication->user_id = Auth::user()->id;
                $jobApplication->job_id = $request->job_id;
                $jobApplication->filename = $filename;
                $jobApplication->save();

                Mail::to($job->user->email)->send(new JobApplication($jobApplication, $user, $file));

                Toastr::success('Successfully applied for a job', 'Success');
                return redirect()->route('search.job');
            }

            Toastr::success('File extension must be jpg, pdf, png or docx only', 'Fail');
            return redirect()->route('search.job');
        }

        $jobApplication = new \App\Model\JobApplication();
        $jobApplication->description = $description;
        $jobApplication->user_id = Auth::user()->id;
        $jobApplication->job_id = $request->job_id;
        $jobApplication->save();


        Mail::to($job->user->email)->send(new JobApplication($jobApplication, $user, null));


        Toastr::success('Successfully applied for a job', 'Success');
        return redirect()->route('search.job');
    }
}
