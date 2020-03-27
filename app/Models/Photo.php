<?php
/**
 * Created by PhpStorm.
 * User: Marijana
 * Date: 26.3.2020.
 * Time: 16.28
 */

namespace App\Models;


class Photo
{

    public $path_new;
    public $alt;

    public function insert()
    {
        return \DB::table('post_photo')
            ->insertGetId([
                'path_new' => $this->path_new,
                'alt' => $this->alt

            ]);
    }

}