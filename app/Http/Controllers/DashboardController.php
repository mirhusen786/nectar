<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{

    public function index()
   {
       if(Auth::user()->hasRole('Admin'))
       {
            return view('Admin.dashboard');
       }
       elseif(Auth::user()->hasRole('Super_Admin'))
       {
            return view('Super_Admin.dashboard');
       }
     
   
   }

   public function Admin()
   {
     return view('Admin.dashboard');
   }

   public function Super_Admin()
   {
     return view('Super_Admin.dashboard');
   }

  

}
