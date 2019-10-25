<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
        //Las siguientes sentencias
        // Sin "iluminate" da errores, asi que tenemos
        // que poner la siguiente ruta
        use Illuminate\Support\Facades\DB;

class LibrosController extends Controller{
    public function index(){
        /*return "<h1> Hola mundo! He creado una clase LibrosController
         y cuando llamo a la funcion, esta me responde!</h1>";*/

        // Otra opcion es crear la variable y ponerla donde esta ahora
        //['nombre => 'Jorge Ortega'];
        // $nombre = "Jorge Ortega";

        
        //return view ('presentacion',['nombre' =>'Jorge Ortega']);

        //Ahora en vez de irnos al padre, vamos a irnos al hijo.
        //return view('presentacion-hija');

        //ahora vamos a probar a meter una base de datos como salida
        //$libros = DB::select('select * from libros');

        // vamos a cambiar lasentencia SQL, vamos a usar otra
        $libros = DB::table('libros')->get();

        //dd($libros);
        return view('presentacion-hija',['books' => $libros]);
    }

    /*public function show(){
        return view('welcome');
    } */

    // ------------------------¡¡¡¡¡¡¡ Solo se puede mostrar una vista con Show !!!!!! -------------------------

    /* public function show(){
        return view('presentacion');
    }*/

    public function show($id){
        $libro=DB::table('libros')->find($id);
        return view('libroconcreto',['books' => $libro]);
    }
}
