<?php

namespace App\Http\Controllers;

use App\Repository\AdminRepo;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    protected $RepoAdmin;

    /**
     * AdminController constructor.
     */
    public function __construct(AdminRepo $adminRepo)
    {
        $this->middleware('auth');
        $this->RepoAdmin = $adminRepo;
    }

    public function adminView(){
        return view('admin.index');
    }

    public function newNoticia(){
        $noti =  $this->RepoAdmin->listNoticia();
        return view('admin.noticias.index',compact('noti'));
    }
    public function saveNoticia(Request $request){
       return  $this->RepoAdmin->saveNoticia($request,auth()->user()->id,1);
    }
    public function NoticiaView($slug){
        $noti = $this->RepoAdmin->getPostBySlug($slug);
        return view('WebPage.noticia',compact('noti'));
    }


    public function getPost(Request $request){
       return $post = $this->RepoAdmin->getPostId($request['id_post']); //1 : CATEGORIA NOTICIAS

    }


}


