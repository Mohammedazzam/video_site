<?php

namespace App\Http\Controllers\BackEnd;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


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
         User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->route('users.index');
    }

    public function edit($id){
        $row = User::FindOrFail($id);
        return view('bake-end.users.edit',compact('row'));

    }

    public function update($id){

    }

    public function delete($id){

    }
}

