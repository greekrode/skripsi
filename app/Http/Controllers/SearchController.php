<?php

namespace App\Http\Controllers;

use App\Model\Country;
use App\Model\EmploymentType;
use App\Model\Job;
use App\Model\JobApplication;
use App\Model\Seniority;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class SearchController extends Controller
{
    public function job()
    {
        $seniorities = Seniority::all();
        $types = EmploymentType::all();
        $countries = Country::all();
        $jobs = Job::all();

        $data = [
            'seniorities' => $seniorities,
            'types' => $types,
            'countries' => $countries,
            'jobs' => $jobs
        ];

        return view('pages.account.search')->with($data);
    }

    public function filter(Request $request)
    {
        if ($request->ajax()) {
            $response = '';
            $query = $request->get('query');

            if ($query !== null) {
                $jobs = DB::table('jobs')
                    ->select('jobs.id', 'jobs.title', 'jobs.created_at', 'jobs.city', 'users.first_name', 'users.last_name', 'employment_types.name as etName',
                        'seniorities.name as sName', 'countries.name as cName')
                    ->join('employment_types', 'jobs.type_id', '=', 'employment_types.id')
                    ->join('seniorities', 'jobs.seniority_id', '=', 'seniorities.id')
                    ->join('users', 'jobs.user_id', '=', 'users.id')
                    ->join('countries', 'jobs.country', '=', 'countries.code')
                    ->where('jobs.title', 'like', '%'.$query.'%')
                    ->orWhere('employment_types.name', 'like', '%'.$query.'%')
                    ->orWhere('countries.name', 'like', '%'.$query.'%')
                    ->orWhere('seniorities.name', 'like', '%'.$query.'%')
                    ->get();
            } else {
                $jobs = DB::table('jobs')
                    ->select('jobs.id', 'jobs.title', 'jobs.created_at', 'jobs.city', 'users.first_name', 'users.last_name', 'employment_types.name as etName',
                        'seniorities.name as sName', 'countries.name as cName')
                    ->join('employment_types', 'jobs.type_id', '=', 'employment_types.id')
                    ->join('seniorities', 'jobs.seniority_id', '=', 'seniorities.id')
                    ->join('users', 'jobs.user_id', '=', 'users.id')
                    ->join('countries', 'jobs.country', '=', 'countries.code')
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

    public function users(Request $request)
    {
        $users = User::select(['first_name', 'last_name', 'email'])->get();

        return DataTables::of($users)->make();
    }
}
