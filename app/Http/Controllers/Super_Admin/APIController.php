<?php

namespace App\Http\Controllers\Super_Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class APIController extends Controller
{
    public function display()
    {
        $json=Http::get('http://myomsapi.globaltechsolution.com.np:802/api/MasterList/ProductList?DbName=ERPDEMO101 ')->json();
        return view('Super_Admin.API.table',['data'=>$json]);  
    }
}
