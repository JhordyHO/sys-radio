<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function horario(){
        return view('WebPage.horario');
    }
    public function djs(){
        return view('WebPage.djs');
    }
    public function index2(){
        return view('WebPage.index2');
    }
    public function noticias(){
        return view('WebPage.noticias');
    }
    public function galeria(){
        return view('WebPage.galeria');
    }
    public function faq(){
        return view('WebPage.faq');
    }
    public function contacto(){
        return view('WebPage.contacto');
    }
}
