<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
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
        return view('WebPage.noticias');
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
