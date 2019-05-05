<?php

namespace App\Http\Controllers;

use App\Model\JobApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function job()
    {
        return view('pages.account.search');
    }


    public function user(Request $request)
    {
        return view('pages.company.search');
    }

    public function filter(Request $request)
    {
        if ($request->ajax()) {
            $response = '';
            $query = $request->get('query');

            if ($query !== null) {
                $jobs = DB::table('jobs')
                    ->select('jobs.id', 'jobs.title', 'jobs.created_at', 'jobs.end_date', 'jobs.city', 'users.first_name', 'users.last_name', 'employment_types.name as etName',
                        'seniorities.name as sName', 'countries.name as cName')
                    ->join('employment_types', 'jobs.type_id', '=', 'employment_types.id')
                    ->join('seniorities', 'jobs.seniority_id', '=', 'seniorities.id')
                    ->join('users', 'jobs.user_id', '=', 'users.id')
                    ->join('countries', 'jobs.country', '=', 'countries.code')
                    ->where('jobs.title', 'like', '%'.$query.'%')
                    ->where('jobs.end_date', '>', new \DateTime() )
                    ->orWhere('employment_types.name', 'like', '%'.$query.'%')
                    ->orWhere('countries.name', 'like', '%'.$query.'%')
                    ->orWhere('seniorities.name', 'like', '%'.$query.'%')
                    ->get();
            } else {
                $jobs = DB::table('jobs')
                    ->select('jobs.id', 'jobs.title', 'jobs.created_at', 'jobs.end_date', 'jobs.city', 'users.first_name', 'users.last_name', 'employment_types.name as etName',
                        'seniorities.name as sName', 'countries.name as cName')
                    ->join('employment_types', 'jobs.type_id', '=', 'employment_types.id')
                    ->join('seniorities', 'jobs.seniority_id', '=', 'seniorities.id')
                    ->join('users', 'jobs.user_id', '=', 'users.id')
                    ->join('countries', 'jobs.country', '=', 'countries.code')
                    ->where('jobs.end_date', '>', new \DateTime() )
                    ->get();
            }

            $rowCount = $jobs->count();
            if ($rowCount > 0) {
                foreach ($jobs as $job)
                {
                    $date = date('M d, Y', strtotime($job->created_at));
                    if (JobApplication::where('user_id', Auth::user()->id)->where('job_id', $job->id)->first()) {
                        $response .= '
                    <tr>
                        <td class="forum">
                            '.$date.'
                        </td>
                        <td class="topics">
                            '.$job->first_name.' '.$job->last_name.'
                        </td>
                        <td class="posts">
                            '.$job->title.'
                        </td>
                        <td>
                            '.$job->etName.'
                        </td>
                        <td>
                            '.$job->sName.'     
                        </td>
                        <td>
                            '.$job->city.', '.$job->cName.'
                        </td>
                        <td>
                            <span><a id="apply" href="#" class="btn btn-grey full-width" style="pointer-events: none">Applied!</a></span>
                        </td>
                    </tr>';
                    } else {
                        $response .= '
                    <tr>
                        <td class="forum">
                            '.$date.'
                        </td>
                        <td class="topics">
                            '.$job->first_name.' '.$job->last_name.'
                        </td>
                        <td class="posts">
                            '.$job->title.'
                        </td>
                        <td>
                            '.$job->etName.'
                        </td>
                        <td>
                            '.$job->sName.'     
                        </td>
                        <td>
                            '.$job->city.', '.$job->cName.'
                        </td>
                        <td>
                            <span><a id="apply" href="#" onclick="apply('.$job->id.')" class="btn btn-primary btn-sm full-width">Apply Now!</a></span>
                        </td>
                    </tr>';
                    }
                }
            } else {
                $response = '
                    <tr>
                        <td align="center" colspan="7">No Data Found</td>
                    </tr>
                    ';
            }

            $data = [
                'table_data' => $response,
            ];

            return response($data);
        }
        return response();
    }

    public function filterUser(Request $request)
    {
        if ($request->ajax()) {
            $response = '';
            $query = $request->get('query');

            if ($query !== null) {
                $users = DB::table('users')
                    ->select('users.id', 'users.first_name', 'users.last_name', 'users.email', 'faculties.name as fName', 'majors.name as mName', 'users.city', 'users.country')
                    ->join('faculties', 'users.faculty_id', '=', 'faculties.id')
                    ->join('majors', 'users.major_id', '=', 'majors.id')
                    ->where('users.first_name', 'like', '%'.$query.'%')
                    ->where('users.last_name', 'like', '%'.$query.'%')
                    ->orWhere('faculty.name', 'like', '%'.$query.'%')
                    ->orWhere('major.name', 'like', '%'.$query.'%')
                    ->orWhere('users.city', 'like', '%'.$query.'%')
                    ->orWhere('users.country', 'like', '%'.$query.'%')
                    ->get();
            } else {
                $users = DB::table('users')
                    ->select('users.id', 'users.first_name', 'users.last_name', 'users.email', 'faculties.name as fName', 'majors.name as mName', 'users.city', 'users.country')
                    ->join('faculties', 'users.faculty_id', '=', 'faculties.id')
                    ->join('majors', 'users.major_id', '=', 'majors.id')
                    ->get();
            }

            $rowCount = $users->count();
            if ($rowCount > 0) {
                foreach ($users as $user)
                {
                    $response .= '
                    <tr>
                        <td class="forum" style="text-align: center !important;">
                            '.$user->first_name.' '.$user->last_name.'
                        </td>
                        <td class="topics">
                            '.$user->fName.'
                        </td>
                        <td class="posts">
                            '.$user->mName.'
                        </td>
                        <td>
                            '.$user->city.', '.$user->country.'
                        </td>
                        <td>
                            <span><a id="apply" href="mailto:'.$user->email.'" target="_blank" class="btn btn-primary btn-sm full-width">Contact Now!</a></span>
                        </td>
                    </tr>';
                }
            } else {
                $response = '
                    <tr>
                        <td align="center" colspan="7">No Data Found</td>
                    </tr>
                    ';
            }

            $data = [
                'table_data' => $response,
            ];

            return response($data);
        }
        return response();
    }
}
