<?php

namespace App\Http\Controllers\Backend;


use App\Models\Message;

class Messages extends BackEndController
{
    public function __construct(Message $model)
    {
        parent::__construct($model);
    }
}
