@extends('presentacion')
@section('TituloPag','Libro Concreto ')
@section('Cuerpo')
    <h5> Este es el libro "{{$books->Titulo}}" Escrito por "{{$books->Autor}}" </h5>
@endsection
@section('Footer')
    <h2> Esto es el pie de una pagina Hija copiada! </h2>
@endsection