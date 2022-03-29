<?php


namespace App\Http\Controllers\Super_Admin;
use App\Http\Controllers\Controller;

use App\Models\Super_Admin\Team;
use App\Models\Super_Admin\Banner;
use App\Models\Super_Admin\Header;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $team=Team::all();
        $data=compact('team');
       return view('Super_Admin.Team.table')->with($data); 
    }


    public function form()
    { 
        $team=new Team;
        $url=url('team/Insert');
        $data=compact('team','url');
        return view('Super_Admin.Team.form')->with($data); 
    }
   

    public function store(Request $request)
    {
        $team=new Team;
        if($request->file('image')){
            $image = $request->file('image')->store('teams','uploads');
        }
        $team->image=$image;
        $team->name=$request['name'];
        $team->level=$request['level'];
        $team->facebook=$request['facebook'];
        $team->twitter=$request['twitter'];
        $team->linkdin=$request['linkdin'];
        $team->status=1;
        $team->save();
        return redirect('team')->with('message','Record  is Successfully Added');;
    }
   
   
    public function edit($id)
    {
        $team=Team::find($id);
        if(is_null($team))
        {
            return redirect('team');
        }
        else
        {
            $url=url('team/update')."/".$id;
            $data=compact('team','url');
            return view('Super_Admin.Team.form')->with($data);
        }
      
    }

    
    public function update(Request $request,$id)
    {
        $team=Team::find($id);

        if($request->file('image')){
            $image = $request->file('image')->store('teams','uploads');
        }
        $team->image=$image;
        $team->name=$request['name'];
        $team->level=$request['level'];
        $team->facebook=$request['facebook'];
        $team->twitter=$request['twitter'];
        $team->linkdin=$request['linkdin'];
        $team->save();
        return redirect('team')->with('message','Record is Successfully Updated'); 
    }

    
    public function delete(Request $request,$id)
    {
        $team=Team::findOrFail($id);
        if($team->image) {
            // dd($header->image);
            unlink('uploads/'.$team->image);
        }
        $team->delete();
        $request->session()->flash('msg','Record is successfully deleted'); 
      return redirect('team');
    }


    public function status(Request $request,$status,$id)
    {
        $team=Team::find($id);
        $team->status=$status;
        $team->save();
        $request->session()->flash('message','Status is successfully Updated'); 
        return redirect('team');

       
    }

    public function details(Request $request, $id)
    {
        $detail=Team::find($id);
        echo"<pre>";
        print_r($detail);
        $header=Header::all();
        $banner=Banner::all();
        $data=compact('detail','header','banner');
        return view('Super_Admin.Team.details')->with($data);
    }
}
