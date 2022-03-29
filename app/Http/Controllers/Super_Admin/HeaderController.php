<?php

namespace App\Http\Controllers\Super_Admin;
use App\Http\Controllers\Controller;

use App\Models\Super_Admin\Header;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    public function index()
    {
        $header=Header::all();
        $url=url('header/Insert');
        $data=compact('header','url');
       return view('Super_Admin.Header.table')->with($data); 
    }


    public function form()
    { 
        $header=new Header;
        $url=url('header/Insert');
        $data=compact('header','url');
        return view('Super_Admin.Header.form')->with($data); 
    }
   

    public function store(Request $request)
    {
       

        $header=new Header;

        if($request->file('image')){
            
            $image = $request->file('image')->store('images','uploads');
            $header->image=$image;
        }
        
        $header->phone=$request['phone'];
        $header->email=$request['email'];
        $header->phone1=$request['phone1'];
        $header->email1=$request['email1'];
        $header->contact=$request['contact'];
        $header->facebook=$request['facebook'];
        $header->twitter=$request['twitter'];
        $header->youtube=$request['youtube'];
        $header->status=1;
        $header->save();
        return redirect('header')->with('message','Record  is Successfully Added');;
    }
   
   
    public function edit($id)
    {
        $header=Header::find($id);
        if(is_null($header))
        {
            return redirect('header');
        }
        else
        {
            $url=url('header/update')."/".$id;
            $data=compact('header','url');
            return view('Super_Admin.Header.form')->with($data);
        }
      
    }

    
    public function update(Request $request,$id)
    {
        $header=Header::find($id);

        if($request->file('image')){
            
            $image = $request->file('image')->store('images','uploads');
            $header->image=$image;
        }
        
        $header->phone=$request['phone'];
        $header->email=$request['email'];
        $header->phone1=$request['phone1'];
        $header->email1=$request['email1'];
        $header->contact=$request['contact'];
        $header->facebook=$request['facebook'];
        $header->twitter=$request['twitter'];
        $header->youtube=$request['youtube'];
        $header->save();
        return redirect('header')->with('message','Record is Successfully Updated'); 
    }

    
    public function delete(Request $request,$id)
    {
        $header=Header::findOrFail($id);
        if($header->image) {
            // dd($header->image);
            unlink('uploads/'.$header->image);
        }
        $header->delete();
        $request->session()->flash('msg','Record is successfully deleted'); 
      return redirect('header');
    }


    public function status(Request $request,$status,$id)
    {
        $header=Header::find($id);
        $header->status=$status;
        $header->save();
        $request->session()->flash('message','Status is successfully Updated'); 
        return redirect('header');

       
    }
}
