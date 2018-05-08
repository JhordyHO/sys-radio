<?php
/**
 * Created by PhpStorm.
 * User: nik_1
 * Date: 14/04/2018
 * Time: 5:53
 */

namespace App\Repository;


use App\Noticia;

class AdminRepo
{

    protected $Noticias;

    public function __construct(Noticia $noticia)
    {
        $this->Noticias = $noticia;
    }

    public function  viewById($idN){

    }
    public  function  createNoticia(){
        $modelo = new $this->Noticia;
          $modelo->url = $data['body'];
    }

}