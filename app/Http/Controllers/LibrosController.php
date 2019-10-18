<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibrosController extends Controller{
    public function index(){
        /*return "<h1> Hola mundo! He creado una clase LibrosController
         y cuando llamo a la funcion, esta me responde!</h1>";*/

        // Otra opcion es crear la variable y ponerla donde esta ahora
        //['nombre => 'Jorge Ortega'];
        // $nombre = "Jorge Ortega";
        
        
        
        //return view ('presentacion',['nombre' =>'Jorge Ortega']);

        //Ahora en vez de irnos al padre, vamos a irnos al hijo.
        return view('presentacion-hija');


    }

    /*public function show(){
        return view('welcome');
    } */

    // Solo se puede mostrar una vista con Show 

    public function show(){
        return view('presentacion');
    }
}
