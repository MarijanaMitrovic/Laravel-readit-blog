<?php
/**
 * Created by PhpStorm.
 * User: Marijana
 * Date: 5.3.2020.
 * Time: 18.49
 */

namespace App\Models;


class Post
{

    public $title;
    public $text;
    public $category_id;
    public $post_pic_id;

    public function getHomePosts(){
        return \DB::table("post AS p")
            ->join("post_photo AS ph", "p.post_pic_id", "=", "ph.id_postphoto" )
            ->orderBy('updated_at','desc')
            ->limit(5)
            ->get();
    }

    public function getAllPosts(){
        return \DB::table('post AS p')
            ->join("post_photo AS ph",  "p.post_pic_id", "=", "ph.id_postphoto" )
            ->orderBy('updated_at','desc')
            ->paginate(3);
    }


    public function getSingle($id){
        return \DB::table('post as p')
            ->join("post_photo AS ph",  "p.post_pic_id", "=", "ph.id_postphoto" )

            ->where('p.id', $id)
            ->select('p.*', 'ph.path_new', \DB::raw("(SELECT count(id) FROM log WHERE post_id = $id) as visited"), \DB::raw("(SELECT count(id) FROM comment WHERE post_id=$id) as num_of_com"))
            ->get()->first();
    }


    public function addVisit($id, $ip)
    {
        return \DB::table("log")
            ->insert([
                'ip_address' => $ip,
                'post_id' => $id,
                'time'=>date("Y-m-d H:i:s")
                ]);
    }


 public function getAdminPosts(){
     return \DB::table('post AS p')
         ->join("post_photo AS ph",  "p.post_pic_id", "=", "ph.id_postphoto" )
         ->orderBy('updated_at','desc')
         ->paginate(5);
 }


    public function insert()
    {
        return \DB::table('post')
            ->insertGetId([
                'title' => $this->title,
                'text' => $this->text,
                'post_pic_id' => $this->post_pic_id,
                'category_id' => $this->category_id,
                'created_at'=>date("Y:m:d H:i:s"),
                'updated_at'=>date("Y:m:d H:i:s")
            ]);
    }

    public function find($id)
    {
        return \DB::table('post AS p')
            ->join("post_photo AS ph",  "p.post_pic_id", "=", "ph.id_postphoto" )
            ->where('p.id', $id)
            ->select('p.*', 'ph.path_new', 'ph.alt')
            ->get()->first();
    }



    public function delete($id)
    {
        return \DB::table('post')->delete($id);

    }

    public function update($id)
    {
        $updateData = [
            'title' => $this->title,
            'text' => $this->text,
            'category_id' => $this->category_id,
            'updated_at' => date("Y-m-d H:i:s")
        ];
        if ($this->post_pic_id != null) {
            $updateData['post_pic_id'] = $this->post_pic_id;
        }
        return \DB::table('post')
            ->where('id', $id)
            ->update($updateData);
    }

    public function getPhotoId($postId)
    {
        return \DB::table('post')
            ->where('id', $postId)
            ->select("post.post_pic_id as id")
            ->get()->first()->id;
    }




}