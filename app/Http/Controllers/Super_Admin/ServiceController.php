<?php

namespace App\Http\Controllers\Super_Admin;
use App\Http\Controllers\Controller;
use App\Models\Super_Admin\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $service=Service::all();
        $data=compact('service');
       return view('Super_Admin.Service.table')->with($data); 
    }


    public function form()
    { 
        $service=new Service;
        $url=url('service/Insert');
        $data=compact('service','url');
        return view('Super_Admin.Service.form')->with($data); 
    }
   

    public function store(Request $request)
    {
       

        $service=new Service();

        $service->info=$request['info'];
        $service->icon_slug=$request['icon_slug'];
        $service->details=$request['details'];
        $service->button_slug=$request['button_slug'];
        $service->title=$request['title'];
      
        $service->status=1;
        $service->save();
        return redirect('service')->with('message','Record  is Successfully Added');;
    }
   
   
    public function edit($id)
    {
        $service=Service::find($id);
        if(is_null($service))
        {
            return redirect('service');
        }
        else
        {
            $url=url('service/update')."/".$id;
            $data=compact('service','url');
            return view('Super_Admin.Service.form')->with($data);
        }
      
    }

    
    public function update(Request $request,$id)
    {
        $service=Service::find($id);

        $service->info=$request['info'];
        $service->icon_slug=$request['icon_slug'];
        $service->details=$request['details'];
        $service->button_slug=$request['button_slug'];
        $service->title=$request['title'];
        $service->save();
        return redirect('service')->with('message','Record is Successfully Updated'); 
    }

    
    public function delete(Request $request,$id)
    {
        $header=Service::find($id);
        if(!is_null($header))
        {
            $header->delete();
        };
        $request->session()->flash('msg','Record is successfully deleted'); 
      return redirect('service');
    }


    public function status(Request $request,$status,$id)
    {
        $service=Service::find($id);
        $service->status=$status;
        $service->save();
        $request->session()->flash('message','Status is successfully Updated'); 
        return redirect('header');

       
    }
}
