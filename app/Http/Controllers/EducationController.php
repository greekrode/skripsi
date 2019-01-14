<?php

namespace App\Http\Controllers;

use App\Model\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Kamaln7\Toastr\Facades\Toastr;

class EducationController extends Controller
{
    public function store(Request $request)
    {
        $education = new Education();
        $education->school = $request->school;
        $education->degree = $request->degree;
        $education->field_of_study = $request->field_of_study;
        $education->grade = $request->grade;
        $education->start_year = $request->from_year;
        $education->end_year = $request->to_year;
        $education->description = $request->description;
        $education->user_id = Auth::user()->id;
        $education->save();

        Toastr::success('New education has been added!', 'Success');
        return redirect()->back();
    }

    public function show(Request $request)
    {
        $eduId = $request->get('eduId');

        $education = Education::find($eduId);

        return response($education);
    }

    public function update(Request $request)
    {
        $education = Education::find($request->edu_id);

        $education->school = $request->school;
        $education->degree = $request->degree;
        $education->field_of_study = $request->field_of_study;
        $education->grade = $request->grade;
        $education->start_year = $request->from_year;
        $education->end_year = $request->to_year;
        $education->description = $request->description;
        $education->save();

        Toastr::success('Education has been updated!', 'Success');
        return redirect()->back();
    }

    public function destroy($id)
    {
        $education = Education::find($id);
        if ($education) {
            $education->delete();
            Toastr::success('Education has been deleted!', 'Success');
        } else {
            Toastr::error('Education can not be deleted!', 'Error');
        }
        return redirect()->back();
    }
}
