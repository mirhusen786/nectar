<?php

namespace App\Http\Controllers\Super_Admin;
use App\Http\Controllers\Controller;

use App\Models\Super_Admin\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{public function index()
    {
        $menu=Menu::all();
        $data=compact('menu');
       return view('Frondend.Menu.table')->with($data); 
    }


    public function form()
    { 
        $menu=new Menu;
        $menus=Menu::all();
        $url=url('menu/Insert');
        $data=compact('menu','url','menus');
        return view('Frondend.Menu.form')->with($data); 
    }
   

    public function store(Request $request)
    {
        $menu=new Menu;
        $menu->menu_name=$request['menu_name'];
        $menu->parent_menu=$request['parent_menu'];
        $menu->slug=$request['slug'];
        $menu->status=1;
        $menu->save();
        return redirect('menu')->with('message','Record  is Successfully Added');;
    }
   
   
    public function edit($id)
    {
        $menu=Menu::find($id);
        $menus=Menu::all();
        if(is_null($menu))
        {
            return redirect('menu');
        }
        else
        {
            $url=url('menu/update')."/".$id;
            $data=compact('menu','url','menus');
            return view('Frondend.Menu.form')->with($data);
        }
      
    }

    
    public function update(Request $request,$id)
    {
        $menu=Menu::find($id);
        $menu->menu_name=$request['menu_name'];
        $menu->parent_menu=$request['parent_menu'];
        $menu->slug=$request['slug'];
        $menu->status=1;
        $menu->save();
      
        return redirect('menu')->with('message','Record is Successfully Updated'); 
    }

    
    public function delete(Request $request,$id)
    {
        $menu=Menu::findOrFail($id);
        $menu->delete();
        $request->session()->flash('msg','Record is successfully deleted'); 
      return redirect('menu');
    }


    public function status(Request $request,$status,$id)
    {
        $menu=Menu::findOrFail($id);
        $menu->status=$status;
        $menu->save();
        $request->session()->flash('message','Status is successfully Updated'); 
        return redirect('menu');

       
    }

}
