<?php

namespace App\Http\Controllers\Super_Admin;
use App\Http\Controllers\Controller;

use App\Models\Super_Admin\Idea;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
   public function store(Request $request)
   {
       $idea=new Idea;
       $idea->name=$request['name'];
       $idea->email=$request['email'];
       $idea->phone=$request['phone'];
       $idea->comment=$request['comment'];
       $idea->save();
       return redirect('/')->with('msg','Thank to share your idea.');
   }
}
