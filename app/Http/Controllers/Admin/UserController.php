<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Models\Activity;

class UserController extends Controller
{
    public function deleteUser($id)
    {
        $userModel = new User();
        try {
            $userModel->delete($id);
            $actModel=new Activity();
            $actModel->activity_content="Admin deleted user";
            $actModel->usermail=session('user')->email;
            $actModel->addActivity();
            return redirect()->back()->with("success", "User successfully deleted.");
        }
        catch (QueryException $ex) {
            \Log::error("Error while deleting  " . $ex->getMessage());
            return redirect()->back()->with("warning", "An error has occurred, please try again later.");
        }
    }

    public function store(RegisterRequest $request)
    {


        $userModel = new User();
        $userModel->name = $request->get('name');
        $userModel->surname = $request->get("surname");
        $userModel->email = $request->get('email');
        $userModel->password = $request->get("password");
        $userModel->role_id = $request->get("role_id");

        try {
            $userModel->insertUser();
            $actModel=new Activity();
            $actModel->activity_content="Admin added user";
            $actModel->usermail=session('user')->email;
            $actModel->addActivity();
            return redirect(route("admin-users"))->with("success", "User successfully added!");
        } catch(\Exception $ex) {
            \Log::error($ex->getMessage());
            return redirect()->back()->with("error", "An server error has occurred, please try again later.");
        }
    }


    public function update(RegisterRequest $request, $id)
    {


        $userModel = new User();
        $userModel->name = $request->get('name');
        $userModel->surname = $request->get("surname");
        $userModel->email = $request->get('email');
        $userModel->password = $request->get("password");
        $userModel->role_id = $request->get("role_id");

        try {
            $userModel->update($id);
            $actModel=new Activity();
            $actModel->activity_content="Admin updated user";
            $actModel->usermail=session('user')->email;
            $actModel->addActivity();
            return redirect(route("admin-users"))->with("success", "User successfully edited!");
        } catch(\Exception $ex) {
            \Log::error($ex->getMessage());
            return redirect()->back()->with("error", "An server error has occurred, please try again later.");
        }
    }


}
