<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use TCG\Voyager\Http\Controllers\VoyagerController;

class LogoutController extends VoyagerController
{
    public function logout()
    {
        Auth::logout();

        return redirect('home');
    }

}
