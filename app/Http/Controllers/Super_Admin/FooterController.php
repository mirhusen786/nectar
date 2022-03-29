<?php

namespace App\Http\Controllers\Super_Admin;
use App\Http\Controllers\Controller;
use App\Models\Super_Admin\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
               public function index()
               {
                   $footer=Footer::all();
                   $url=url('footer/Insert');
                   $data=compact('footer','url');
                  return view('Super_Admin.Footer.table')->with($data); 
               }
           
           
               public function form()
               { 
                   $footer=new Footer;
                   $url=url('footer/Insert');
                   $data=compact('footer','url');
                   return view('Super_Admin.Footer.form')->with($data); 
               }
              
           
               public function store(Request $request)
               {
                  
           
                   $footer=new Footer;
           
                   
                   
                   $footer->heading=$request['heading'];
                   $footer->menu_name=$request['menu_name'];
                   $footer->slug=$request['slug'];
               
                   $footer->status=1;
                   $footer->save();
                   return redirect('footer')->with('message','Record  is Successfully Added');;
               }
              
              
               public function edit($id)
               {
                   $footer=Footer::find($id);
                   if(is_null($footer))
                   {
                       return redirect('footer');
                   }
                   else
                   {
                       $url=url('footer/update')."/".$id;
                       $data=compact('footer','url');
                       return view('Super_Admin.Footer.form')->with($data);
                   }
                 
               }
           
               
               public function update(Request $request,$id)
               {
                   $footer=Footer::find($id);
           
                   
                   
                   $footer->heading=$request['heading'];
                   $footer->menu_name=$request['menu_name'];
                   $footer->slug=$request['slug'];
               
                   $footer->status=1;
                   $footer->save();
                   return redirect('footer')->with('message','Record is Successfully Updated'); 
               }
           
               
               public function delete(Request $request,$id)
               {
                   $footer=Footer::findOrFail($id);
                  
                   $footer->delete();
                   $request->session()->flash('msg','Record is successfully deleted'); 
                 return redirect('footer');
               }
           
           
               public function status(Request $request,$status,$id)
               {
                   $footer=Footer::find($id);
                   $footer->status=$status;
                   $footer->save();
                   $request->session()->flash('message','Status is successfully Updated'); 
                   return redirect('footer');
           
                  
               }
}
