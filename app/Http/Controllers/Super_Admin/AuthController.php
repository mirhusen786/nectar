<?php

namespace App\Http\Controllers\Super_Admin;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class AuthController extends Controller
{
    //

    public Function index()
    {
        return view('Super_Admin.change_password.form');
    }


    public function change(Request $request)
    {
       
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required',
            'confirm_password' => 'required|same:new_password'
        ]);

       
        // dd($request->all());
        $user = User::findOrFail(1);

        $input = $request->all();
        // dd($input);

        if(Hash::check($request->old_password,$user->password)){
            // dd('Dada');
        $input['password'] = Hash::make($request->new_password);
        $user->update($input);

        }else{
        return "error passsword";
        }



        return "success";



    }
}
