<?php

namespace App\Http\Controllers\Super_Admin;
use App\Http\Controllers\Controller;
use App\Models\Super_Admin\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        $banner=Banner::all();
        $data=compact('banner');
        
       return view('Super_Admin.Banner.table')->with($data); 
    }


    public function form()
    { 
        $banner=new Banner;
        $url=url('banner/Insert');
        $data=compact('banner','url');
        return view('Super_Admin.Banner.form')->with($data); 
    }
   

    public function store(Request $request)
    {
       

        $banner=new Banner;

        if($request->file('image')){
            $image = $request->file('image')->store('banner','uploads');
            $banner->image=$image;
        }
      
        $banner->sub_heading=$request['sub_heading'];
        $banner->title=$request['title'];
        $banner->button_slug=$request['button_slug'];
        
        $banner->status=1;
        $banner->save();
        return redirect('banner')->with('message','Record  is Successfully Added');;
    }
   
   
    public function edit($id)
    {
        $banner=Banner::find($id);
        if(is_null($banner))
        {
            return redirect('banner');
        }
        else
        {
            $url=url('banner/update')."/".$id;
            $data=compact('banner','url');
            return view('Super_Admin.Banner.form')->with($data);
        }
      
    }

    
    public function update(Request $request,$id)
    {
        $banner=Banner::find($id);

        if($request->file('image')){
            if($banner->auth_image) {
                unlink('uploads/'.$banner->image);
            }
            $image = $request->file('image')->store('banner','uploads');
            $banner->image=$image;
        }
      
        $banner->sub_heading=$request['sub_heading'];
        $banner->title=$request['title'];
        $banner->button_slug=$request['button_slug'];
        $banner->save();
        return redirect('banner')->with('message','Record is Successfully Updated'); 
    }

    
    public function delete(Request $request,$id)
    {
        $banner=Banner::find($id);
        if($banner->image) {
            // dd($header->image);
            unlink('uploads/'.$banner->image);
        }
        if(!is_null($banner))
        {
            $banner->delete();
        };
        $request->session()->flash('msg','Record is successfully deleted'); 
      return redirect('banner');
    }


    public function status(Request $request,$status,$id)
    {
        $banner=Banner::find($id);
        $banner->status=$status;
        $banner->save();
        $request->session()->flash('message','Status is successfully Updated'); 
        return redirect('banner');

       
    }
}
