<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\Videos\Store;
use App\Models\Category;
use App\Models\Skill;
use App\Models\Tag;
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

//       dd(request()->route()->parameter('video'));
//       if(request()->route()->parameter('video')){
//           dd('mmm');
//       };

       $array = [
           'categories' =>Category::get(),
           'skills' => Skill::get(),
           'tags' => Tag::get(),
           'selectedSkills' => [],
           'selectedTags' => []
       ];

       if(request()->route()->parameter('video')){
           $array['selectedSkills'] = $this->model->find(request()->route()->parameter('video'))
               ->skills()->pluck('skills.id')->toArray(); //نفس الشئ هي والي في الأسفل
//           ->skills()->get()->pluck('id')->toArray();
//           dd($array['selectedSkills']);

           $array['selectedTags'] = $this->model->find(request()->route()->parameter('video'))
               ->tags()->pluck('tags.id')->toArray();


       };


       return $array;
   }


    public function store(Store $request)
    {
       $requestArray = $request->all()+ ['user_id'=>auth()->user()->id];//هذه للحفظ
       $row = $this->model->create($requestArray); //هذه للحفظ

        if (isset($requestArray['skills'])&& !empty($requestArray['skills'])){
            $row->skills()->sync($requestArray['skills']);
        }

        if (isset($requestArray['tags'])&& !empty($requestArray['tags'])){
            $row->tags()->sync($requestArray['tags']);
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

        if (isset($requestArray['tags'])&& !empty($requestArray['tags'])){
            $row->tags()->sync($requestArray['tags']);
        }


        return redirect()->route('videos.edit', ['id' => $row->id]);

    }
}
