<?php

namespace App\Http\Controllers;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

use Illuminate\Http\Request;
use App\Models\Navigation;
use App\Models\Post;
use App\Models\Comment;
use App\Models\SendEmail;
use App\Models\Activity;

class FrontController extends Controller
{

   private $data=[];

   public function __construct(){

       $navModel= new Navigation();

       $navigation=$navModel->getMenuItems();
       $this->data= ["navigation"=>$navigation];
   }

    public function index(){
        $model=new Post();
        $posts=$model->getHomePosts();
        $this->data+=["posts"=>$posts];
        return view("front.pages.home",$this->data);

    }

    public function getAll(){
        $postsModel=new Post();
        $posts=$postsModel->getAllPosts();
        $this->data+=["posts"=>$posts];
        return view('front.pages.posts',$this->data);
    }

    public function getSinglePost(Request $request, $id)
    {
        $postModel = new Post();
        $post = $postModel->getSingle($id);
        if (!$post) {
            return view('front.pages.404');
        }

        $commentsModel = new Comment();
          $post->comments = $commentsModel->getPostComments($id);
        // $this->data['post'] = $post;
          $postModel->addVisit($id, $request->ip());
        $this->data+=["post"=>$post];
        return view("front.pages.single_post", $this->data);
    }


        public function showLoginForm(){
            return view('front.pages.login', $this->data);
        }

        public function showRegisterForm(){
            return view ('front.pages.register',$this->data);
        }

        public function contactForm(){
       return view ('front.pages.contact', $this->data);
        }
    public function getAuthor(){
        return view ('front.pages.author', $this->data);
    }


    public function contactUs (Request $request)
    {
        $name=$request->name;
        $email=$request->email;
        $message=$request->message;
        $ip=$request->ip();
        $emailSender = new SendEmail();
        try {
            $emailSender -> ContactAdmin($email,$name,$message);
            $actModel=new Activity();
            $actModel->activity_content="You have new message";
            $actModel->usermail=session('user')->email;
            $actModel->addActivity();

            return redirect()->back()->with('success', 'Message sent successfully');
        }
        catch(QueryException $ex){
            \Log::error("Error sending message".$ex->getMessage());
            return redirect()->back()->with('error','Server error occured');
        }
    }

}
