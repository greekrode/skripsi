<?php

namespace App\Http\Controllers;

use App\Model\Employment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmploymentController extends Controller
{
    public function store(Request $request)
    {
        $employment = new Employment();
        $employment->title = $request->title;
        $employment->company = $request->company;
        $employment->location = $request->location;
        $employment->start_date = $request->from_month.' '.$request->from_year;
        if ($request->present === 'on') {
            $employment->end_date = 'Present';
        } else {
            $employment->end_date = $request->to_month.' '.$request->to_year;
        }
        $employment->description = $request->description;
        $employment->user_id = Auth::user()->id;
        $employment->save();

        return redirect()->back();
    }
}
