<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Dotenv\Exception\ValidationException;
use Illuminate\Database\QueryException;
use App\Http\Requests\RegisterRequest;
use App\Models\Activity;


class LoginController extends Controller
{


    public function register(RegisterRequest $request){
        $model=new User();

        $model->name=$request->get('name');
        $model->surname=$request->get('surname');
        $model->email=$request->get('email');
        $model->password=$request->get('password');
        $model->role_id=2;

        try {
            $model->insertUser();
            return redirect('/login')->with("success", "Successfully created account, now log in");
            $actModel=new Activity();
            $actModel->activity_content="User with this ip registred";
            $actModel->usermail=$request->ip();
            $actModel->addActivity();
        } catch(QueryException $e) {
            \Log::error($e->getMessage());
            return redirect('/register')->with("error", "Something went wrong! Try again");
        }
    }

    public function doLogin(LoginRequest $request){

        $email = $request->input("email");
        $password = $request->input("password");

        $model = new User();
        $user= $model->getUserAuth($email, $password);

        if($user){

            $request->session()->put("user", $user);
            $actModel=new Activity();
            $actModel->activity_content="User logged in";
            $actModel->usermail=session('user')->email;
            $actModel->addActivity();


            return \redirect("/")->with("message", "Successfully login!");
        } else {
            return redirect("/login")->with("error", "You need to register first!");
        }

    }

    public function logout(Request $request){
        $request->session()->forget("user");
        $request->session()->flush();
        $actModel=new Activity();
        $actModel->activity_content="User logged out";
        $actModel->usermail=$request->ip();
        $actModel->addActivity();
        return redirect("/login")->with("message", "You are logged out now");
    }
}
