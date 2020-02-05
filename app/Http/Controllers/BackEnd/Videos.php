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


    public function create(){


        $moduleName = $this->getModelName();
        $pageTitle =  " Create " . $moduleName;
        $pageDes = "You Can create " . $moduleName;
        $folderName = $this->getClassNameFromModel();
        $routeName = $folderName;
        $categories = Category::get();


        return view('bake-end.'. $folderName .'.create',compact(
            'pageTitle',
            'moduleName',
            'pageDes',
            'folderName',
            'routeName',
            'categories'

        ));

    }


    public function edit($id){

        $row = $this->model->FindOrFail($id);

        $moduleName = $this->getModelName();
        $pageTitle =  " Edit ".$moduleName;
        $pageDes = "You Can edit " . $moduleName;
        $folderName = $this->getClassNameFromModel();
        $routeName = $folderName;
        $categories = Category::get();



        return view('bake-end.'. $folderName .'.edit',compact(
            'row',
            'pageTitle',
            'moduleName',
            'pageDes',
            'folderName',
            'routeName',
            'categories'

        ));

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
