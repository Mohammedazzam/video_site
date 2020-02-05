<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\Videos\Store;
use App\Models\Category;
use App\Models\Video;


class Videos extends BackEndController
{
    public function __construct(Video $model)
    {
        parent::__construct($model);
    }

   protected function with(){
        return ['cat', 'user'];
   }


   protected function append()
   {
       return[
           'categories' =>Category::get()
       ];
   }


    public function store(Store $request)
    {

        $this->model->create($request->all()+['user_id' =>auth()->user()->id]); //هذه للحفظ
        return redirect()->route('videos.index');
    }


    public function update($id, Store $request)
    {
        $row = $this->model->FindOrFail($id);
        $row->update($request->all());

        return redirect()->route('videos.edit', ['id' => $row->id]);

    }
}
