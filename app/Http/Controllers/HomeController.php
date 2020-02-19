<?php

namespace App\Http\Controllers;

use App\Http\Requests\FrontEnd\Comments\Store;
use App\Models\Category;
use App\Models\Comments;
use App\Models\Skill;
use App\Models\Tag;
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

    public function video($id){
        $video = Video::with('skills','tags','user','user','comments.user')->findOrFail($id);
        return view('front-end.video.index',compact('video'));
    }

    public function skills($id){
        $skill = Skill::findOrFail($id);
        $videos = Video::whereHas('skills',function ($query) use($id){
            $query->where('skill_id',$id);
        })->orderBy('id','desc')->paginate(30);
        return view('front-end.skill.index',compact('videos','skill'));
    }

    public function tags($id){
        $tag = Tag::findOrFail($id);
        $videos = Video::whereHas('tags',function ($query) use($id){
            $query->where('tag_id',$id);
        })->orderBy('id','desc')->paginate(30);
        return view('front-end.tag.index',compact('videos','tag'));
    }

    public function commentUpdate($id,Store $request){
        $comment = Comments::findOrFail($id);
        if(($comment->user_id == auth()->user()->id) || auth()->user()->group == 'admin'){
            $comment->update(['comment' => $request->comment]);
            }
            return redirect()->route('frontend.video',['id'=>$comment->video_id,'#commnets']);
    }



}
