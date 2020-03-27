<?php
/**
 * Created by PhpStorm.
 * User: Marijana
 * Date: 18.3.2020.
 * Time: 16.58
 */

namespace App\Models;


class Comment
{
    public $content;
    public $post_id;
    public $reply;

    public function getPostComments($id)
    {
        return \DB::table('comment AS c')
            ->join("user AS u", "c.user_id", "=", "u.id")
            ->where('post_id', $id)
            ->select('c.*', 'u.name', 'u.surname')
            ->orderBy('c.created_at', 'desc')
            ->get();
    }

    public function insertCom(){
        $this->reply=null;
        return \DB::table('comment')
            ->insert([

                'content'=>$this->content,
                'created_at'=>date("Y-m-d H:i:s"),
                'updated_at'=>date("Y-m-d H:i:s"),
                'user_id'=>session()->get('user')->id,
                'post_id'=>$this->post_id,
                'reply'=>$this->reply



            ]);
    }

    public function addReply($id)
    {
        return \DB::table('comment')
            ->where('id', $id)
            ->update([
                'reply' => $this->reply

            ]);
    }

    public function find($id)
    {
       return \DB::table('comment')
            ->where('id', $id)->get()->first();
    }


    public function delete($id)
    {
        if($this->canDelete($id)) {
            return \DB::table('comment')->delete($id);
        }
        return 0;
    }


    private function canDelete($id)
    {
        $comment = $this->find($id);

        return $comment ? (session()->get('user')->role_name == 'admin') || ($comment->user_id == session()->get('user')->id) : false;
    }


    public function getAllComm(){
        return \DB::table('comment AS c')
            ->join('user AS u','c.user_id','=','u.id')
            ->join('post AS p','c.post_id','=','p.id')
            ->select('c.*','u.email','p.title')
            ->orderBy('c.updated_at', 'desc')
            ->paginate(3);
    }

    public function deleteAdminComment($id)
    {
        return \DB::table('comment')->delete($id);

    }

    public function findCom($id)
    {
        return \DB::table('comment')
            ->where('id', $id)->get()->first();
    }

    public function update($id)
    {
        return \DB::table('comment')
            ->where('id', $id)
            ->update([
                'content' => $this->content,
                'updated_at' => date("Y-m-d H:i:s")
            ]);
    }

}