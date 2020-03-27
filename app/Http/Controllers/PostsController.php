<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{


    public function getAll(){
        $postsModel=new Post();
        $posts=$postsModel->getAllPosts();
       return view('pages.posts',["posts"=>$posts]);
    }



}
