<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function AdminCon(){

        return view('admin.index');


    }public function create(){
    return view('admin.create');
    }
    public function guardarNoticia{Request $request}{
       dd($request);
     }
    public function view(){
        return "metodo view";

    }
    public function update(){
        return "metodo update";

    }
    public function eliminar(){
        return "metodo eliminar";

    }

}

//-------------crud noticias-------------

