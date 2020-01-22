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
        $rows =$this->model->paginate(10);

//        dd($this->getClassNameFromModel()); //هيك بجيب اسم الفولدر

        return view('bake-end.'.$this->getClassNameFromModel().'.index',compact('rows'));
    }

    protected function getClassNameFromModel(){
        return str_plural(strtolower(class_basename($this->model)));
    }

}
