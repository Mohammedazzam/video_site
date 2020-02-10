<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Video;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $videos = Video::orderBy('id','desc')->paginate(30);
        return view('home',compact('videos'));
    }


    public function category($id){
        $cat = Category::findOrFail($id);
        $videos = Video::where('cat_id')->orderBy('id','desc')->paginate(30);
        return view('front-end.category.index',compact('videos','cat'));
    }

}
