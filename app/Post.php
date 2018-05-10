<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $primaryKey = 'idpost';

    public function Autor(){
        return $this->belongsTo('App\User','author_id');
    }


}
