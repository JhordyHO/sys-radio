<?php
/**
 * Created by PhpStorm.
 * User: nik_1
 * Date: 14/04/2018
 * Time: 5:53
 */

namespace App\Repository;



use App\Post;

class AdminRepo
{
    protected $Post;

    public function __construct(Post $post)
    {
        $this->Post = $post;
    }

    public function saveNoticia($data,$id_autor,$id_cate){
        $model = new $this->Post;
        $model->category_id = $id_cate;
        $model->title = $data['title'];
        $model->body = $data['content'];
        $model->author_id = $id_autor;
        $model->banner = $data['banner'];
        $model->resume = $data['resume'];
        $model->slug_url = $data['link'];
        $model->active = true;
        $model->save();
        return $model;
    }

    public function listNoticia(){
       return $this->Post->orderBy('created_at', 'desc')->paginate(5); //asc //desc
    }


}