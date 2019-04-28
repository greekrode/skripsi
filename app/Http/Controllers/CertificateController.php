<?php

namespace App\Http\Controllers;

use App\Model\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Kamaln7\Toastr\Facades\Toastr;

class CertificateController extends Controller
{
    public function store(Request $request)
    {
        $certificate = new Certificate();
        $certificate->name = $request->name;
        $certificate->date = $request->date;
        $certificate->notes = $request->description;
        $certificate->user_id = Auth::user()->id;
        $certificate->link = $request->link;

        $certificate->save();

        Toastr::success('New certificate has been added!', 'Success');
        return redirect()->back();
    }

    public function show(Request $request)
    {
        $certId = $request->get('certId');

        $certificate = Certificate::find($certId);

        return response($certificate);
    }

    public function update(Request $request)
    {
        $certificate = Certificate::find($request->cert_id);

        $certificate->name = $request->name;
        $certificate->date = $request->date;
        $certificate->notes = $request->description;
        $certificate->link = $request->link;

        $certificate->save();

        Toastr::success('Certificate has been updated!', 'Success');
        return redirect()->back();
    }

    public function destroy($id)
    {
        $certificate = Certificate::find($id);
        if ($certificate) {
            $certificate->delete();
            Toastr::success('Certificate has been deleted!', 'Success');
        } else {
            Toastr::error('Certificate can not be deleted!', 'Error');
        }
        return redirect()->back();
    }
}
