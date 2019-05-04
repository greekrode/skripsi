<?php

namespace App\Http\Controllers;

use App\Mail\JobApplication;
use App\Model\Job;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StatsController extends Controller
{
    public function index()
    {
        $totalJobPostings = Job::where('user_id', Auth::user()->id)->count();
        $totalJobApplications = DB::table('jobs')
                                ->select(DB::raw('count(job_applications.id) as total'))
                                ->join('job_applications', 'job_applications.job_id', '=', 'jobs.id')
                                ->where('jobs.user_id', Auth::user()->id)
                                ->first();

        $topFaculties = DB::table('users')
                        ->select(DB::raw('faculties.name as name, count(users.id) as total'))
                        ->join('faculties', 'users.faculty_id', '=', 'faculties.id')
                        ->whereNotNull('users.email_verified_at')
                        ->groupBy('faculties.id')
                        ->orderBy('total', 'DESC')
                        ->limit(5)
                        ->get();

        $topMajors = DB::table('users')
                    ->select(DB::raw('majors.name as name, count(users.id) as total'))
                    ->join('majors', 'users.major_id', '=', 'majors.id')
                    ->whereNotNull('users.email_verified_at')
                    ->groupBy('majors.id')
                    ->orderBy('total', 'DESC')
                    ->limit(5)
                    ->get();

        $totalAcceptedJobs = DB::table('jobs')
                            ->select(DB::raw('count(job_applications.id) as total'))
                            ->join('job_applications', 'job_applications.job_id', '=', 'jobs.id')
                            ->where('jobs.user_id', Auth::user()->id)
                            ->where('job_applications.accepted', 1)
                            ->first();

        $totalRejectedJobs = DB::table('jobs')
                            ->select(DB::raw('count(job_applications.id) as total'))
                            ->join('job_applications', 'job_applications.job_id', '=', 'jobs.id')
                            ->where('jobs.user_id', Auth::user()->id)
                            ->where('job_applications.rejected', 1)
                            ->first();

        $data = [
            'totalJobPostings' => $totalJobPostings,
            'totalJobApplications' => $totalJobApplications,
            'topFaculties' => $topFaculties,
            'topMajors' => $topMajors,
            'totalAcceptedJobs' => $totalAcceptedJobs,
            'totalRejectedJobs' => $totalRejectedJobs
        ];

        return view('pages.company.stats')->with($data);
    }
}
