<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Navigation;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use App\Models\Activity;
use Psy\Util\Json;

class FrontController extends Controller
{
    private $data=[];

    public function __construct(){
        $navModel= new Navigation();

        $navigation=$navModel->getMenuItems();
        $this->data= ["navigation"=>$navigation];

    }

    public function index(){

        $postsModel=new Post();
        $posts=$postsModel->getAdminPosts();
        $this->data+=["posts"=>$posts];


        return view('admin.pages.posts',$this->data);
    }

    public function showUsers(){
        $usermodel=new User();
        $users=$usermodel->getUsers();
        $this->data+=["users"=>$users];

        return view('admin.pages.users', $this->data);

    }

    public function showComments(){
        $commodel=new Comment();
        $comments=$commodel->getAllComm();
        $this->data+=["comments"=>$comments];

        return view('admin.pages.comments', $this->data);

    }

    public function addPostForm(){
        return view('admin.components.posts.add-post-form',$this->data);
    }

    public function addUserForm(){
        return view('admin.components.users.add-user-form',$this->data);
    }


    public function show($id)
    {
        $model=new Post();
        $post=$model->find($id);
        $this->data+=["post"=>$post];

        return view('admin.components.posts.update-post-form',$this->data );
    }

    public function showUser($id)
    {
        $model=new User();
        $user=$model->getOne($id);
        $this->data+=["user"=>$user];

        return view('admin.components.users.update-user-form',$this->data );
    }

    public function activities(){
        $model=new Activity();
        $activities=$model->getAll();
        $this->data+=["activities"=>$activities];
        return view('admin.pages.activities', $this->data);
    }

    public function getFiltered($time){
        $model=new Activity();
        $activities=$model->getForDate($time);
      //  $this->data+=
        return Json :: encode ( $activities );
      //  return view('admin.pages.activities', $this->data);
    }



}
