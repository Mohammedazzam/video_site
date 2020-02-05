<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\Backend\Videos\Store;
use App\Models\Video;


class Videos extends BackEndController
{
    public function __construct(Video $model)
    {
        parent::__construct($model);
    }


    public function store(Store $request)
    {

        $this->model->create($request->all()); //هذه للحفظ
        return redirect()->route('videos.index');
    }


    public function update($id, Store $request)
    {
        $row = $this->model->FindOrFail($id);
        $row->update($request->all());

        return redirect()->route('videos.edit', ['id' => $row->id]);

    }
}
