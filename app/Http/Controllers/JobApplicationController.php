<?php

namespace App\Http\Controllers;

use App\Mail\JobApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Kamaln7\Toastr\Facades\Toastr;

class JobApplicationController extends Controller
{
    public function create(Request $request)
    {
        $description = $request->description;

        if ($request->hasFile('resume')) {
            $allowedfileExtension = ['pdf','jpg','png','docx'];
            $file = $request->file('resume');
            $extension = $file->getClientOriginalExtension();
            $check = in_array($extension, $allowedfileExtension, true);

            if ($check) {
                $filename = $file->store('resume');

                $jobApplication = new JobApplication([
                    'filename' => $filename,
                    'description' => $description,
                    'user_id' => Auth::user()->id,
                    'job_id' => $request->job_id
                ]);
                $jobApplication->save();

                Toastr::success('Successfully applied for a job', 'Success');
                return redirect()->route('search.job');
            }


            Toastr::success('File extension must be jpg, pdf, png or docx only', 'Fail');
            return redirect()->route('search.job');
        }

        $jobApplication = new JobApplication([
            'description' => $description,
            'user_id' => Auth::user()->id,
            'job_id' => $request->job_id
        ]);
        $jobApplication->save();

        Toastr::success('Successfully applied for a job', 'Success');
        return redirect()->route('search.job');
    }
}
