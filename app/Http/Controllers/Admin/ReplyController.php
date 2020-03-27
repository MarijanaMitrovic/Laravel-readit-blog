<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;

class ReplyController extends Controller
{
    public function reply(Request $request, $commentId){

        $model=new Comment();

        try{
            $model->reply=$request->get('reply');
            $model->addReply($commentId);
            return response (null,200);
        } catch(\Exception $ex){
            \Log::error("Error while adding reply".$ex->getMessage());
            return response(null,422);
        }

    }

    public function show($commentId)
    {
        $model = new Comment();
       return response()->json($model->find($commentId));
    }




}
