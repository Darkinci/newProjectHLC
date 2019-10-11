<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibrosController extends Controller{
    public function index(){
        return "<h1> Hola mundo! He creado una clase LibrosController
         y cuando llamo a la funcion, esta me responde!</h1>";
    }

    public function show(){
        return view('welcome');
    }
}
