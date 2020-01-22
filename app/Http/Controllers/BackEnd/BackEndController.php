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
        $rows = $rows->paginate(10);//بعدين عملت paginate

        $moduleName = $this->pluralModelName();
        $pageTitle =  " Control " . $moduleName;
        $pageDes = "You Can add / edit / delete " . $moduleName;


//        dd($this->getClassNameFromModel()); //هيك بجيب اسم الفولدر

        return view('bake-end.'.$this->getClassNameFromModel().'.index',compact(
            'rows',
            'pageTitle',
            'moduleName',
            'pageDes'
        ));
    }



    public function create(){


        $moduleName = $this->getModelName();
        $pageTitle =  " Create " . $moduleName;
        $pageDes = "You Can create " . $moduleName;

        return view('bake-end.'.$this->getClassNameFromModel().'.create',compact(
            'pageTitle',
            'moduleName',
            'pageDes'
        ));

    }

    public function edit($id){

        $row = $this->model->FindOrFail($id);

        $moduleName = $this->getModelName();
        $pageTitle =  " Edit ".$moduleName;
        $pageDes = "You Can edit " . $moduleName;


        return view('bake-end.'.$this->getClassNameFromModel().'.edit',compact(
            'row',
            'pageTitle',
            'moduleName',
            'pageDes'
            ));

    }

    public function destroy($id){

        $this->model->FindOrFail($id)->delete();
        return redirect()->route($this->getClassNameFromModel().'.index');
    }




    protected function filter($rows){ //عمل فلاتر للفورم
        return $rows;
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
}
