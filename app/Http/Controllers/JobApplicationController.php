<?php

namespace App\Http\Controllers;

use App\Model\JobApplication;
use \App\Mail\JobApplication as JobMail;
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


        $allowedfileExtension = ['pdf','jpg','png','docx'];
        $file = $request->file('resume');

        if (!$file) {
            Toastr::error('Resume is required!', 'Fail');
            return redirect()->route('search.job');
        }

        if ( ($file->getSize() / 1000000) > 5 ) {
            Toastr::error('File size must not excdeed 5MB!', 'Fail');
            return redirect()->route('search.job');
        }

        $extension = $file->getClientOriginalExtension();
        $check = in_array($extension, $allowedfileExtension, true);

        if ($check) {
            $filename = $file->store('resume');

            $jobApplication = new JobApplication();
            $jobApplication->description = $description;
            $jobApplication->user_id = Auth::user()->id;
            $jobApplication->job_id = $request->job_id;
            $jobApplication->filename = $filename;

            Mail::to($job->user->email)->send(new JobMail($jobApplication, $user, $file));

            $jobApplication->save();

            Toastr::success('Successfully applied for a job', 'Success');
            return redirect()->route('search.job');
        }

        Toastr::error('File extension must be jpg, pdf, png or docx only', 'Fail');
        return redirect()->route('search.job');
    }

    public function accept(Request $request)
    {
        $user = User::find(Auth::user()->id);

        $jobApplication =  JobApplication::find($request->accept_job_id);
        $jobApplication->message = $request->accept_message;
        $jobApplication->accepted = 1;

        Mail::to($jobApplication->user->email)->send(new JobMail($jobApplication, $user, null));

        $jobApplication->save();

        Toastr::success('Successfully sent a acceptance letter', 'Success');
        return redirect()->route('job_application.show');
    }

    public function reject(Request $request)
    {
        $user = User::find(Auth::user()->id);

        $jobApplication =  JobApplication::find($request->reject_job_id);
        $jobApplication->message = $request->reject_message;
        $jobApplication->rejected = 1;

        Mail::to($jobApplication->user->email)->send(new JobMail($jobApplication, $user, null));

        $jobApplication->save();

        Toastr::success('Successfully sent a rejection letter', 'Success');
        return redirect()->route('job_application.show');
    }
}
