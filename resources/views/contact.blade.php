@extends('layout')

@section('title', 'Contact')

@section('content')
    <h1>Contacto</h1>

<form method="POST" action="{{ route('contacto') }}">
    @csrf
        <input type="text" name="name" placeholder="Nombre..." value="Richard"><br>
        <input type="email" name="email" placeholder="Email..." value="richard@gmail.com"><br>
        <input type="text" name="subjet" placeholder="Asunto..." value="Beca Python"><br>
        <textarea name="content" id="" cols="10" rows="10" placeholder="Content ....">texto mensaje prueba</textarea><br>
        <button>Enviar</button>
    </form>
@endsection