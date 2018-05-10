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
        if($this->RepoAdmin->saveNoticia($request,auth()->user()->id,1)){
            return back();
        };
    }


}


