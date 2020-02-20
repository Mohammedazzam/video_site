<?php

namespace App\Http\Controllers\Backend;


use App\Http\Requests\BackEnd\Messages\Store;
use App\Models\Message;

class Messages extends BackEndController
{
    public function __construct(Message $model)
    {
        parent::__construct($model);
    }
    public function replay($id , Store $request){
        $message = $this->model->findOrFail($id);
//        dd($request->message,$id);
    }
}
