<?php

namespace App\Http\Controllers\Super_Admin;

use App\Http\Controllers\Controller;
use App\Models\Super_Admin\Nw;
use App\Models\Super_Admin\Team;
use App\Models\Super_Admin\Service;
use App\Models\Super_Admin\Header;
use App\Models\Super_Admin\Banner;
use App\Models\Super_Admin\Detail;
use Illuminate\Http\Request;
use Illuminate\Http\Direct;

class NewsController extends Controller
{
    public function index()
    {
        $news = Nw::all();
        $data = compact('news');
        return view('Super_Admin.News.table')->with($data);
    }


    public function form()
    {
        $news = new Nw;
        $url = url('news/Insert');
        $data = compact('news', 'url');
        return view('Super_Admin.News.form')->with($data);
    }


    public function store(Request $request)
    {
        $news = new Nw;
        if ($request->file('auth_image')) {
            $auth_image = $request->file('auth_image')->store('news', 'uploads');
            $news->auth_image = $auth_image;
        }

        $news->auth_name = $request['auth_name'];
        $news->category = $request['category'];
        $news->title = $request['title'];
        $news->date = $request['date'];
        $news->slug = $request['slug'];
        $news->summary = $request['summary'];
        $news->image = $request['image'];
        $news->status = Nw::STATUS['active'];
        $news->save();
        return redirect('news')->with('message', 'Record  is Successfully Added');
    }


    public function edit($id)
    {
        $news = Nw::find($id);
        if (is_null($news)) {
            return redirect('news');
        } else {
            $url = url('news/update') . "/" . $id;
            $data = compact('news', 'url');
            return view('Super_Admin.News.form')->with($data);
        }
    }


    public function update(Request $request, $id)
    {
        $news = Nw::find($id);
        if ($request->file('auth_image')) {

            if ($news->auth_image) {
                unlink('uploads/' . $news->auth_image);
            }
            $auth_image = $request->file('auth_image')->store('news', 'uploads');
            $news->auth_image = $auth_image;
        }

        $news->auth_name = $request['auth_name'];
        $news->category = $request['category'];
        $news->title = $request['title'];
        $news->date = $request['date'];
        $news->slug = $request['slug'];

        if ($request->file('image')) {
            if ($news->image) {
                unlink('uploads/' . $news->image);
            }
            $image = $request->file('image')->store('news', 'uploads');
            $news->image = $image;
        }

        $news->summary = $request['summary'];
        $news->save();
        return redirect('news')->with('message', 'Record is Successfully Updated');
    }


    public function delete(Request $request, $id)
    {
        $news = Nw::findOrFail($id);
        // if ($news->auth_image) {
        //     unlink('uploads/' . $news->auth_image);
        // }
        // if ($news->image) {
        //     unlink('uploads/' . $news->image);
        // }
        $news->delete();
        $request->session()->flash('msg', 'Record is successfully deleted');
        return redirect('news');
    }


    public function status(Request $request, $status, $id)
    {
        $news = Nw::find($id);
        $news->status = $status;
        $news->save();
        $request->session()->flash('message', 'Status is successfully Updated');
        return redirect('news');
    }

    public function details(Request $request, $id)
    {
        $view = Nw::find($id);
        $header = Header::all();
        $banner = Banner::all();
        $service = Service::all();
        $news = Nw::find($id);
        $team = Team::all();
        $data = compact('header', 'banner', 'news', 'team', 'service','view');
        return view('Super_Admin.News.details')->with($data);
    }


    public function comment(Request $request)
    {
        $detail = new Detail;
        $detail->name=$request['name'];
        $detail->email=$request['email'];
        $detail->phone=$request['phone'];
        $detail->comments=$request['comments'];
        $detail->status=1;
       $detail->save();
       return back()->with('message', 'Record  is Successfully Added');
    }


    public function comment_detail()
    {
        $detail=Detail::all();
        $data=compact('detail');
        return view('Super_Admin.News.comment')->with($data);
    }

    public function comment_status(Request $request, $status, $id)
    {
        $detail = Detail::find($id);
        $detail->status = $status;
        $detail->save();
        $request->session()->flash('message', 'Status is successfully Updated');
        return redirect('comment');
    }

    public function comment_delete(Request $request, $id)
    {
        $detail = Detail::findOrFail($id);
       
        $detail->delete();
        $request->session()->flash('msg', 'Record is successfully deleted');
        return redirect('comment');
    }

}
