<?php

namespace App\Http\Controllers\Super_Admin;
use App\Http\Controllers\Controller;

use App\Models\Super_Admin\CEO;
use Illuminate\Http\Request;

class CEOController extends Controller
{

    
    public function index()
    {
        $ceo=CEO::all();
        $data=compact('ceo');
       return view('Super_Admin.Ceo.table')->with($data); 
    }


    public function form()
    { 
        $ceo=new CEO;
        $url=url('ceo/Insert');
        $data=compact('ceo','url');
        return view('Super_Admin.ceo.form')->with($data); 
    }
   

    public function store(Request $request)
    {
       

        $ceo=new CEO;

        if($request->file('image1')){
            
            $image1 = $request->file('image1')->store('ceo','uploads');
            $ceo->image1=$image1;
        }
        if($request->file('image2')){
            
            $image2 = $request->file('image2')->store('ceo','uploads');
            $ceo->image2=$image2;
        }
        if($request->file('image3')){
            
            $image3 = $request->file('image3')->store('ceo','uploads');
            $ceo->image3=$image3;
        }
        $ceo->name=$request['name'];
        $ceo->level=$request['level'];
        $ceo->title=$request['title'];
        $ceo->summary=$request['summary'];
       
        $ceo->status=1;
        $ceo->save();
        return redirect('ceo')->with('message','Record  is Successfully Added');;
    }
   
   
    public function edit($id)
    {
        $ceo=CEO::find($id);
        if(is_null($ceo))
        {
            return redirect('ceo');
        }
        else
        {
            $url=url('ceo/update')."/".$id;
            $data=compact('ceo','url');
            return view('Super_Admin.Ceo.form')->with($data);
        }
      
    }

    
    public function update(Request $request,$id)
    {
        $ceo=CEO::find($id);

        if($request->file('image1')){
            
            $image1 = $request->file('image1')->store('ceo','uploads');
            $ceo->image1=$image1;
        }
        if($request->file('image2')){
            
            $image2 = $request->file('image2')->store('ceo','uploads');
            $ceo->image2=$image2;
        }
        if($request->file('image3')){
            
            $image3 = $request->file('image3')->store('ceo','uploads');
            $ceo->image3=$image3;
        }
        $ceo->name=$request['name'];
        $ceo->level=$request['level'];
        $ceo->title=$request['title'];
        $ceo->summary=$request['summary'];
       
        $ceo->save();
        return redirect('ceo')->with('message','Record is Successfully Updated'); 
    }

    
    public function delete(Request $request,$id)
    {
        $ceo=CEO::findOrFail($id);
        if($ceo->image) {
            // dd($header->image);
            unlink('uploads/'.$header->image);
        }
        $ceo->delete();
        $request->session()->flash('msg','Record is successfully deleted'); 
      return redirect('ceo');
    }


    public function status(Request $request,$status,$id)
    {
        $ceo=CEO::find($id);
        $ceo->status=$status;
        $ceo->save();
        $request->session()->flash('message','Status is successfully Updated'); 
        return redirect('ceo');

       
    }
}
