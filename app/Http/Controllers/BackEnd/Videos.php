<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\Videos\Store;
use App\Models\Category;
use App\Models\Skill;
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
           'categories' =>Category::get(),
           'skills' => Skill::get()
       ];
   }


    public function store(Store $request)
    {
       $requestArray = $request->all()+['user_id' =>auth()->user()->id];//هذه للحفظ
       $row = $this->model->create($requestArray); //هذه للحفظ

        if (isset($requestArray['skills'])&& !empty($requestArray['skills'])){
            $row->skills()->sync($requestArray['skills']);
        }
        return redirect()->route('videos.index');
    }


    public function update($id, Store $request)
    {
        $requestArray = $request->all();
        $row = $this->model->FindOrFail($id);
        $row->update($requestArray);

        if (isset($requestArray['skills'])&& !empty( $requestArray['skills'])){
            $row->skills()->sync($requestArray['skills']);
        }

        return redirect()->route('videos.edit', ['id' => $row->id]);

    }
}
