<?php

namespace App\Http\Controllers\BackEnd;


use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;

class BackEndController extends Controller{

    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function index(){
        $rows =$this->model;
        $rows = $this->filter($rows); //قمت بتمرير ال rows ونتائج الفلتر

        $with = $this->with();
        if (!empty($rows)){
            $rows = $rows->with($with);
        }

        $rows = $rows->paginate(10);//بعدين عملت paginate
        $moduleName = $this->pluralModelName();
        $sModuleName = $this->getModelName(); //هذه خاصة أن يكون الاسم مفرد وليس جمع
        $routeName = $this->getClassNameFromModel();

        $pageTitle =  " Control " . $moduleName;
        $pageDes = "You Can add / edit / delete " . $moduleName;


//        dd($this->getClassNameFromModel()); //هيك بجيب اسم الفولدر

        return view('bake-end.'.$this->getClassNameFromModel().'.index',compact(
            'rows',
            'pageTitle',
            'moduleName',
            'pageDes',
            'sModuleName',
            'routeName'
        ));
    }



    public function create(){


        $moduleName = $this->getModelName();
        $pageTitle =  " Create " . $moduleName;
        $pageDes = "You Can create " . $moduleName;
        $folderName = $this->getClassNameFromModel();
        $routeName = $folderName;
        $append = $this->append();



        return view('bake-end.'. $folderName .'.create',compact(
            'pageTitle',
            'moduleName',
            'pageDes',
            'folderName',
            'routeName'

        ))->with($append);

    }

    public function edit($id){

        $row = $this->model->FindOrFail($id);

        $moduleName = $this->getModelName();
        $pageTitle =  " Edit ".$moduleName;
        $pageDes = "You Can edit " . $moduleName;
        $folderName = $this->getClassNameFromModel();
        $routeName = $folderName;
        $append = $this->append();



        return view('bake-end.'. $folderName .'.edit',compact(
            'row',
            'pageTitle',
            'moduleName',
            'pageDes',
            'folderName',
            'routeName'

            ))->with($append);

    }

    public function destroy($id){

        $this->model->FindOrFail($id)->delete();
        return redirect()->route($this->getClassNameFromModel().'.index');
    }




    protected function filter($rows){ //عمل فلاتر للفورم
        return $rows;
    }


    protected function with(){
        return[];
    }


    protected function getClassNameFromModel(){ //هذه فانكشن خاصة للإسم وجعله ديناميكي
        return strtolower($this->pluralModelName());
    }

    protected function pluralModelName(){ //هذه  خاصة بالجمع
        return str_plural($this->getModelName());
    }


    protected function getModelName(){
       return class_basename($this->model);
    }

    protected function append(){
        return [];
    }
}
