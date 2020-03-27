<?php
/**
 * Created by PhpStorm.
 * User: Marijana
 * Date: 17.3.2020.
 * Time: 21.34
 */

namespace App\Models;


class User
{
    public $name;
    public $surname;
    public $email;
    public $password;
    public $role_id;


    public function insertUser(){
        return \DB::table('user')
            ->insertGetId([
                'name'=>$this->name,
                'surname'=>$this->surname,
                'email'=>$this->email,
                'password'=>md5($this->password),
                'role_id'=>$this->role_id,
                'created_at'=>date("Y:m:d H:i:s"),
                'updated_at'=>date("Y:m:d H:i:s")

            ]);
    }
    public function getUserAuth($email, $password){
        return \DB::table('user AS u')
            ->join('role AS r', 'u.role_id','=','r.id_role')
            ->select('u.*', 'r.role_name')
            ->where([
                ["email","=",$email],
                ["password","=", md5($password)]
            ])
            ->first();
    }

    public function getUsers(){
        return \DB::table('user AS u')
            ->join('role AS r', 'u.role_id','=','r.id_role')
            ->select('u.*', 'r.role_name')
            ->paginate(5);
    }

    public function delete($id)
    {
        return \DB::table('user')->delete($id);

    }

    public function getOne($id)
    {
        return \DB::table('user')
            ->where("id", $id)->first();
    }

    public function update($id)
    {
        return \DB::table('user')
            ->where("id", $id)
            ->update([
                'name' => $this->name,
                'surname' => $this->surname,
                'email' => $this->email,
                'password' => md5($this->password),
                'role_id' => $this->role_id,
                'updated_at'=>date("Y:m:d H:i:s")
            ]);
    }

}