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


//        dd($this->getClassNameFromModel()); //هيك بجيب اسم الفولدر

        return view('bake-end.'.$this->getClassNameFromModel().'.index',compact('rows'));
    }



    public function create(){
        return view('bake-end.'.$this->getClassNameFromModel().'.create');

    }

    public function edit($id){
        $row = $this->model->FindOrFail($id);
        return view('bake-end.'.$this->getClassNameFromModel().'.edit',compact('row'));

    }

    public function destroy($id){

        $this->model->FindOrFail($id)->delete();
        return redirect()->route($this->getClassNameFromModel().'.index');
    }




    protected function filter($rows){ //عمل فلاتر للفورم
        return $rows;
    }


    protected function getClassNameFromModel(){ //هذه فانكشن خاصة للإسم وجعله ديناميكي
        return str_plural(strtolower(class_basename($this->model)));
    }

}
