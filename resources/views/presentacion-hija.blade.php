@extends('presentacion')
@section('TituloPag','Libros')
@section('Footer')
    <h2> Esto es el pie de una pagina Hija copiada! </h2>
    @foreach ($books as $book)
        <p>Este es el libro "{{$book->Titulo}}" Escrito por "{{$book->Autor}}"</p>
    @endforeach
@endsection