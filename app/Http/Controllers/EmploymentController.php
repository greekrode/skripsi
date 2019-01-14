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

        Toastr::success('New employment has been added!', 'Success');
        return redirect()->back();
    }

    public function show(Request $request)
    {
        $empId = $request->get('empId');

        $employment = Employment::find($empId);

        return response($employment);
    }

    public function update(Request $request)
    {
        $employment = Employment::find($request->emp_id);
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
        $employment->save();

        Toastr::success('Employment has been updated!', 'Success');
        return redirect()->back();
    }

    public function destroy($id)
    {
        $employment = Employment::find($id);
        if ($employment) {
            $employment->delete();
            Toastr::success('Employment has been deleted!', 'Success');
        } else {
            Toastr::error('Employment can not be deleted!', 'Error');
        }
        return redirect()->back();
    }
}
