<?php

namespace App\Http\Controllers;

use App\Model\Award;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Kamaln7\Toastr\Facades\Toastr;

class AwardController extends Controller
{
    public function store(Request $request)
    {
        $award = new Award();
        $award->name = $request->name;
        $award->organization = $request->organization;
        $award->start_date = $request->start_date;
        $award->end_date = $request->end_date;
        $award->description = $request->description;
        $award->user_id = Auth::user()->id;
        $award->link = $request->link;

        $image = $request->file('image');
        if ($image) {
            $extension = $image->getClientOriginalExtension();
            Storage::disk('public')->put($image->getFilename().'.'.$extension, File::get($image));

            $award->mime = $image->getClientMimeType();
            $award->original_image = $image->getClientOriginalName();
            $award->image = $image->getFilename().'.'.$extension;
        }
        $award->save();

        Toastr::success('New award/certification has been added!', 'Success');
        return redirect()->back();
    }

    public function show(Request $request)
    {
        $awdId = $request->get('awdId');

        $award = Award::find($awdId);

        return response($award);
    }

    public function update(Request $request)
    {
        $award = Award::find($request->awd_id);

        $award->name = $request->name;
        $award->organization = $request->organization;
        $award->start_date = $request->start_date;
        $award->end_date = $request->end_date;
        $award->description = $request->description;
        $award->link = $request->link;

        $image = $request->file('image');
        if ($image) {
            $extension = $image->getClientOriginalExtension();
            Storage::disk('public')->put($image->getFilename().'.'.$extension, File::get($image));

            $award->mime = $image->getClientMimeType();
            $award->original_image = $image->getClientOriginalName();
            $award->image = $image->getFilename().'.'.$extension;
        }
        $award->save();

        Toastr::success('Award has been updated!', 'Success');
        return redirect()->back();
    }

    public function destroy($id)
    {
        $award = Award::find($id);
        if ($award) {
            $award->delete();
            Toastr::success('Award has been deleted!', 'Success');
        } else {
            Toastr::error('Award can not be deleted!', 'Error');
        }
        return redirect()->back();
    }
}
