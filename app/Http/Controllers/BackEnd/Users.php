<?php

namespace App\Http\Controllers\BackEnd;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class Users extends BackEndController
{

    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    protected function filter($rows)
    {
        if (request()->has('name') && request()->get('name') != "") {

            $rows = $rows->where('name',request()->get('name') );
        }
        return $rows;
    }

    public function store(Request $request){
         User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->route('users.index');
    }



    public function update($id , Request $request){
        $row = User::FindOrFail($id);

        $requestArray =[
            'name' => $request->name,
            'email' => $request->email,
        ];

        if (request()->has('password')&& request()->get('password') !=""){
            $requestArray =$requestArray + ['password' => Hash::make($request->password)];
        }

//        dd($requestArray);

        $row->update($requestArray);
        return redirect()->route('users.edit',['id'=>$row->id]);

    }


}

