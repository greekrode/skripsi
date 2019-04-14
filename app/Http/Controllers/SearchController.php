<?php

namespace App\Http\Controllers;

use App\Model\Country;
use App\Model\EmploymentType;
use App\Model\Seniority;
use App\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class SearchController extends Controller
{
    public function job()
    {
        $seniorities = Seniority::all();
        $types = EmploymentType::all();
        $countries = Country::all();

        $data = [
            'seniorities' => $seniorities,
            'types' => $types,
            'countries' => $countries
        ];

        return view('pages.account.search')->with($data);
    }

    public function search(Request $request)
    {

    }

    public function users(Request $request)
    {
        $users = User::select(['first_name', 'last_name', 'email'])->get();

        return DataTables::of($users)->make();
    }
}
