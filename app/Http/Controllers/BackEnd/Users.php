<?php

namespace App\Http\Controllers\BackEnd;


use App\Models\User;
use Illuminate\Http\Request;

class Users extends BackEndController
{
    public function index(){
        $rows = User::paginate(10);
        return view('bake-end.users.index',compact('rows'));
    }

    public function create(){
        return view('bake-end.users.create');

    }

    public function store(Request $request){
        dd($request->all());
    }

    public function edit($id){
        return view('bake-end.users.edit');

    }

    public function update($id){

    }

    public function delete($id){

    }
}

