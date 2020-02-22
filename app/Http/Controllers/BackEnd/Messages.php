<?php

namespace App\Http\Controllers\Backend;


use App\Http\Requests\BackEnd\Messages\Store;
use App\Mail\ReplayContact;
use App\Models\Message;
use Illuminate\Support\Facades\Mail;

class Messages extends BackEndController
{
    public function __construct(Message $model)
    {
        parent::__construct($model);
    }
    public function replay($id , Store $request){
        $message = $this->model->findOrFail($id);
//        dd($request->message,$id);
        Mail::send(new ReplayContact($message, $request->messages));
        return redirect()->route('messages.edit',['id'=>$message->id]);

    }
}
