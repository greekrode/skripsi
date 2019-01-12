<?php

namespace App\Http\Controllers;

use App\Model\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        return redirect()->back();
    }

    public function show(Request $request)
    {
        $eduId = $request->get('edu_id');

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

        return redirect()->back();
    }
}
