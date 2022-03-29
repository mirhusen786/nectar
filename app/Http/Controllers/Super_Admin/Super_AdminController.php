<?php

namespace App\Http\Controllers\Super_Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class Super_AdminController extends Controller
{
    public function signout(Request $request)
    {
        Session::flush();
        
        Auth::logout();

        return redirect('login');
    }
}
