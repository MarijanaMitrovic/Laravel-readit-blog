<?php

namespace App\Http\Controllers;
use App\Models\Comment;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Models\Activity;



class CommentsController extends Controller
{
    public function addComment(Request $request, $id){
        if($request->get('content')){
            $comModel=new Comment();
            $comModel->content=$request->get('content');
            $comModel->post_id=$id;
            try{
                $comModel->insertCom();
                $actModel=new Activity();
                $actModel->activity_content="User added comment";
                $actModel->usermail=session('user')->email;
                $actModel->addActivity();

                return redirect()->back()->with('success', 'Comment added successfully');

            }

            catch(QueryException $ex){
                \Log::error("Error adding comment".$ex->getMessage());
                return redirect()->back()->with('error','Server error occured');
            }
        }

        return redirect()->back()->with('warning','Comment field can not be empty');



    }

    public function deleteComment($id)
    {
        $commentModel = new Comment();
        if ($commentModel->find($id)) {
            try {
                if ($commentModel->delete($id)) {
                    $actModel=new Activity();
                    $actModel->activity_content="User deleted comment";
                    $actModel->usermail=session('user')->email;
                    $actModel->addActivity();
                    return redirect()->back()->with("success", "Comment successfully deleted.");
                } else {
                    \Log::critical("User without permission tried to delete comment.");
                    $actModel=new Activity();
                    $actModel->activity_content="User without permission tried to delete comment";
                    $actModel->usermail=session('user')->email;
                    $actModel->addActivity();
                    return redirect()->back()->with("warning", "An error has occurred, please try again later.");
                }
            } catch (QueryException $e) {
                \Log::error("Error while deleting  " . $e->getMessage());
                return redirect()->back()->with("warning", "An error has occurred, please try again later.");
            }
        }
        return redirect()->back();
    }


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

    public function showForm($commentId)
    {
        $model = new Comment();
        return response()->json($model->findCom($commentId));
    }


    public function editCom(Request $request, $commentId)
    {
        $commentModel = new Comment();
        try {
            $commentModel->content = $request->get('content');
            $commentModel->update($commentId);
            $actModel=new Activity();
            $actModel->activity_content="User edited comment";
            $actModel->usermail=session('user')->email;
            $actModel->addActivity();
            return redirect()->back()->with("success", "Comment successfully edited.");
        } catch (\Exception $e) {
            \Log::error("Error while editing " . $e->getMessage());
            return redirect()->back()->with("warning", "An error has occurred, please try again later.");
        }

    }
}
