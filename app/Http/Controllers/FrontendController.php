<?php

namespace App\Http\Controllers;

use App\Models\Super_Admin\Header;
use App\Models\Super_Admin\Banner;
use App\Models\Super_Admin\Service;
use App\Models\Super_Admin\Team;
use App\Models\Super_Admin\Nw;
use App\Models\Super_Admin\CEO;
use App\Models\Super_Admin\Footer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
  public function index(Request $request)
  {
    // getTopNavCat();
    // die();
    $header = Header::take(1)->get();
    // echo "<pre>";
    // print_r($header);
    $banner = Banner::all();
    // dd($banner);
    $service = Service::all();
    $ceo = CEO::all();
    $news = Nw::all();
    $team = Team::all();

    $footer = Footer::all();
    // $detail=DB::table('Detail')->count();
    $data = compact('header', 'banner', 'news', 'team', 'service', 'ceo','footer');
    return view('Frondend.layout')->with($data);
  }

  public function search(Request $request)
  {
    // Get the search value from the request
    $search = $request->input('search');

    // Search in the title and body columns from the posts table
    $services = Service::query()

      ->orWhere('title', 'LIKE', "%{$search}%")
      ->orWhere('info', 'LIKE', "%{$search}%")
      ->orWhere('details', 'LIKE', "%{$search}%")
      ->get();
    // $news = Nw::query()
    //   ->orWhere('title', 'LIKE', "%{$search}%")
    //   ->orWhere('summary', 'LIKE', "%{$search}%")
    //   ->orWhere('category', 'LIKE', "%{$search}%")
    //   ->get();

    //   $services->append($news);
    //   dd($services);

    // Return the search view with the resluts compacted

    $header = Header::take(1)->get();
    $footer = Footer::all();
    $data=compact('header','services','footer');
    return view('frondend.search')->with($data);
  }
}
