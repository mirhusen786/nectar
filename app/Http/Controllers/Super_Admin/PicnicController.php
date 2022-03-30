<?php

namespace App\Http\Controllers\Super_Admin;
use App\Http\Controllers\Controller;
use App\Models\Super_Admin\picnic;
use Illuminate\Http\Request;

class PicnicController extends Controller
{
    public function index()
    {
        $picnic=picnic::all();
        $data=compact('picnic');
       return view('Super_Admin.Gallery.picnic.table')->with($data); 
    }


    public function form()
    { 
        $picnic=new picnic;
        $url=url('picnic/Insert');
        $data=compact('picnic','url');
        return view('Super_Admin.Gallery.picnic.form')->with($data); 
    }
   

    public function store(Request $request)
    {
       

        $picnic=new picnic();

        $picnic->desc=$request['desc'];
        if($request->file('image')){
            
            $image = $request->file('image')->store('Gallery','uploads');
            $picnic->image=$image;
        }
        
      
      
        $picnic->status=1;
        $picnic->save();
        return redirect('picnic')->with('message','Record  is Successfully Added');;
    }
   
   
    public function edit($id)
    {
        $picnic=picnic::find($id);
        if(is_null($picnic))
        {
            return redirect('picnic');
        }
        else
        {
            $url=url('picnic/update')."/".$id;
            $data=compact('picnic','url');
            return view('Super_Admin.Gallery.picnic.form')->with($data);
        }
      
    }

    
    public function update(Request $request,$id)
    {
        $picnic=picnic::find($id);

        $picnic->desc=$request['desc'];
        if($request->file('image')){
            
            $image = $request->file('image')->store('Gallery','uploads');
            $picnic->image=$image;
        }
        
        $picnic->status=1;
       
        return redirect('picnic')->with('message','Record is Successfully Updated'); 
    }

    
    public function delete(Request $request,$id)
    {
        $picnic=picnic::find($id);
     
        if(!is_null($picnic))
        {
            $picnic->delete();
        };
        $request->session()->flash('msg','Record is successfully deleted'); 
      return redirect('picnic');
    }


    public function status(Request $request,$status,$id)
    {
        $picnic=picnic::find($id);
        $picnic->status=$status;
        $picnic->save();
        $request->session()->flash('message','Status is successfully Updated'); 
        return redirect('picnic');

       
    }
}
