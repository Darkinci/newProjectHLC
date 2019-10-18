@extends('presentacion')
@section('TituloPag','Libros')
@section('Footer')
    <p> Esto es el pie de una pagina Hija copiada! </p>
    @foreach ($books as $book)
        <p>Este es el libro {{ $book->titulo }}</p>
    @endforeach
@endsection