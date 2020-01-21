<?php

namespace App\Http\Controllers\BackEnd;


use App\Models\User;

class Users extends BackEndController
{
    public function index(){
        $rows = User::paginate(10);
        return view('bake-end.users.index',compact('rows'));
    }
}
