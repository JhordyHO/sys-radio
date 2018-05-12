<?php

namespace App\Http\Controllers;

use App\Repository\AdminRepo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $RepoAdmin;
    public function __construct(AdminRepo $adminRepo)
    {
        $this->RepoAdmin = $adminRepo;
    }

    public function webIndex(){
        $noti = $this->RepoAdmin->listNoticia();
        return view('welcome',compact('noti'));
    }
    public function NoticiaView($slug){
        $noti = $this->RepoAdmin->getPostBySlug($slug);
        return view('WebPage.noticia',compact('noti'));
    }
    public function programacion(){
        return view('WebPage.programacion');
    }
    public function djs(){
        return view('WebPage.djs');
    }
    public function ranking(){
        return view('WebPage.ranking');
    }
    public function noticias(){
        $noti = $this->RepoAdmin->listNoticia();
        return view('WebPage.noticias',compact('noti'));
    }
    public function galeria(){
        return view('WebPage.galeria');
    }
    public function nosotros(){
        return view('WebPage.nosotros');
    }
    public function contacto(){
        return view('WebPage.contacto');
    }

}
