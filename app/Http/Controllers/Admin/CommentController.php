<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Activity;

class CommentController extends Controller
{
    public function deleteComment($id)
    {
        $commModel = new Comment();
        try {
            $commModel->deleteAdminComment($id);
            $actModel=new Activity();
            $actModel->activity_content="Admin deleted comment";
            $actModel->usermail=session('user')->email;
            $actModel->addActivity();
            return redirect()->back()->with("success", "Comment successfully deleted.");
        }
        catch (QueryException $ex) {
            \Log::error("Error while deleting  " . $ex->getMessage());
            return redirect()->back()->with("warning", "An error has occurred, please try again later.");
        }
    }
}
