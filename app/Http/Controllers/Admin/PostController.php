<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\Photo;
use App\Models\Activity;

class PostController extends Controller
{




    public function index()
    {
        return view('layouts.admin_layout');
    }


    public function deletePost($id)
    {
        $postModel = new Post();
            try {
                $postModel->delete($id);
                $actModel=new Activity();
                $actModel->activity_content="Admin deleted post";
                $actModel->usermail=session('user')->email;
                $actModel->addActivity();
                    return redirect()->back()->with("success", "Post successfully deleted.");
                }
             catch (QueryException $ex) {
                \Log::error("Error while deleting  " . $ex->getMessage());
                return redirect()->back()->with("warning", "An error has occurred, please try again later.");
            }
        }




    public function store(PostRequest $request)
    {

        try {

            $postModel = new Post();

            $path_new = $request->file('photo');
            $directory = public_path("images/");
            $fileName = time() . "_" . $path_new->getClientOriginalName();
            $path_new->move($directory, $fileName);

            $photoModel = new Photo();
            $photoModel->path_new =  $fileName;
            $photoModel->alt = "Blog photo";

            $postModel->post_pic_id = $photoModel->insert();
            $postModel->title = $request->get('title');
            $postModel->text = $request->get('text');
            $postModel->category_id = $request->get('category_id');
            $postModel->insert();
            $actModel=new Activity();
            $actModel->activity_content="Admin added post";
            $actModel->usermail=session('user')->email;
            $actModel->addActivity();
            return redirect()->back()->with("success", "Post successfully added!");
        } catch (QueryException $e) {
            \Log::error("Database error " . $e->getMessage());
        } catch(FileException $e) {
            \Log::error("Picture upload error " . $e->getMessage());
        }

        return redirect()->back()->with("error", "An error occured, please try again later");
    }






    public function update(PostRequest $request, $id)
    {
      $model=new Post();


        $oldPhotoId = null;
        if ($request->hasFile('photo')) {
            $oldPictureId = $model->getPhotoId($id);
            try {
                $path_new = $request->file('photo');
                $directory = public_path("images/");
                $fileName = time() . "_" . $path_new->getClientOriginalName();
                $path_new->move($directory, $fileName);

                $photoModel = new Photo();
                $photoModel->path_new =  $fileName;
                $photoModel->alt = "Blog post";
                $model->post_pic_id = $photoModel->insert();
                $actModel=new Activity();
                $actModel->activity_content="Admin updated post";
                $actModel->usermail=session('user')->email;
                $actModel->addActivity();

            } catch (QueryException $ex) {
                \Log::error("Errror while updating " . $ex->getMessage());
            } catch (FileException $ex) {
                \Log::error("Error in uploading photo " . $ex->getMessage());
            }
        }
        $model->title = $request->get('title');
        $model->text = $request->get('text');
        $model->category_id = $request->get("category_id");
        try {
            $model->update($id);

            try {
                if($oldPhotoId) {
                    $photoModel = new Photo();
                    $photo = $photoModel->find($oldPhotoId);
                    unlink(public_path($photo->path_new));
                    $photoModel->delete($oldPhotoId);
                }
            } catch(\Exception $ex) {
                \Log::error("Error while deleting old photo" . $ex->getMessage());
            }

            return redirect(route("admin-posts"))->with("success", "Post successfully edited!");
        } catch (QueryException $ex) {
            \Log::error("Error in update " . $ex->getMessage());
            return redirect()->back()->with("error", "An error occurred, please try again later");
        }



    }





}