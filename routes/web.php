<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", "FrontController@index");
Route::get("/posts", "FrontController@getAll");

Route::get("/author", "FrontController@getAuthor");
Route::get("/posts/{id}", "FrontController@getSinglePost")->name("singlePost");
Route::get("/contact", "FrontController@contactForm")->name("contact")->middleware(["isLogged"]);
Route::post ('/contact','FrontController@contactUs')-> name('contact-us')->middleware(["isLogged"]);


Route::get("/login", "FrontController@showLoginForm")->name("loginForm");
Route::get("/register", "FrontController@showRegisterForm")->name('registerForm');

Route::post("/comments/{id}", "CommentsController@addComment")->name("addComment");
Route::get("/comments/{id}/delete", "CommentsController@deleteComment")->name("deleteCom");
Route::get("/comments/{id}/form", "CommentsController@showForm")->name("show-edit");
Route::post("/comments/{id}/update-com","CommentsController@editCom")->name("edit-com");



Route::post("/do-register", "LoginController@register")->name("register");
Route::post("/do-login", "LoginController@doLogin")->name("login");
Route::get("/logout", "LoginController@logout")->name("logout")->middleware(["isLogged"]);


Route::group(['middleware' => 'isAdmin'], function(){

    Route::get("/admin-panel/posts","Admin\FrontController@index" )->name("admin-posts");
    Route::get("/admin-panel/posts/{id}/delete","Admin\PostController@deletePost" )->name("delete-post");
    Route::get("/admin-panel/posts/add","Admin\FrontController@addPostForm" )->name("add-post");
    Route::post("/admin-panel/posts","Admin\PostController@store" )->name("post-store");
    Route::get("/admin-panel/posts/{id}", "Admin\FrontController@show")->name("post-show");
    Route::post("/admin-panel/posts/{id}/update", "Admin\PostController@update")->name("post-update");

    Route::get("admin-panel/users", "Admin\FrontController@showUsers")->name("admin-users");
    Route::get("/admin-panel/users/{id}/delete","Admin\UserController@deleteUser" )->name("delete-user");
    Route::get("/admin-panel/users/add","Admin\FrontController@addUserForm" )->name("add-user");
    Route::post("/admin-panel/users","Admin\UserController@store" )->name("user-store");
    Route::get("/admin-panel/users/{id}", "Admin\FrontController@showUser")->name("user-show");
    Route::post("/admin-panel/users/{id}/update", "Admin\UserController@update")->name("user-update");


    Route::get("admin-panel/comments", "Admin\FrontController@showComments")->name("admin-comments");
    Route::get("/admin-panel/comments/{id}/delete","Admin\CommentController@deleteComment" )->name("delete-comment");

    Route::get("/comments/{id}/reply", "Admin\ReplyController@show")->name("show");
    Route::post("/comments/{id}/add-reply","Admin\ReplyController@reply")->name("replyForm");

    Route::get("/admin-panel/activities","Admin\FrontController@activities" )->name("admin-activities");
    Route::get("/admin-panel/activities/{time}","Admin\FrontController@getFiltered");



});



