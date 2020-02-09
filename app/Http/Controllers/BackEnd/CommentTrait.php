<?php

namespace App\Http\Controllers\Backend;


use App\Http\Requests\Backend\Comments\Store;
use App\Models\Comments;

trait commentTrait{
    public function commentStore(Store $request){
        $requestArray = $request->all()+["user_id" =>auth()->user()->id];
//        dd($requestArray);
        Comments::create($requestArray);
        return redirect()->route('videos.edit',['id'=>$requestArray['video_id']]);
    }


    public function commentDelete($id){
        $row = Comments::findOrFail($id);
        $row->delete($id);
        return redirect()->route('videos.edit',['id'=>$row->video_id]);
    }

    public function commentUpdate($id, Store $request){
        $row = Comments::findOrFail($id);
        $row->update($request->all());
        return redirect()->route('videos.edit',['id'=>$row->video_id]);
    }
}