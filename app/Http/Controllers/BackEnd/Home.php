<?php

namespace App\Http\Controllers\BackEnd;



use App\Models\Comments;
use App\Models\User;

class Home extends BackEndController
{

    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    public function index(){
        $comments = Comments::with('user','video')->orderby('id','desc')->paginate(3);
        return view('bake-end.home',compact('comments'));
    }
}


