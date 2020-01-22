<?php

namespace App\Http\Controllers\BackEnd;


use App\Http\Requests\BackEnd\Users\Store;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class Users extends BackEndController
{

    public function __construct(User $model)
    {
        parent::__construct($model);
    }


    public function store(Store $request){
        $requestArray = $request->all();
        $requestArray['password']= Hash::make($requestArray['password']);
        User::create($requestArray); //هذه للحفظ

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

