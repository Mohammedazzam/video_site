<?php

namespace App\Http\Controllers\BackEnd;



class Home extends BackEndController
{
    public function index(){
        return view('bake-end.home');
    }
}


