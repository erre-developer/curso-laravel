@extends('layout')

@section('title', 'Crear Proyecto')

@section('content')
    <h1>Crear nuevo Proyecto</h1>

    <form method="POST" action="{{ route('projects.store') }}">
        @csrf
        <label for="">Titulo proyecto
            <br>
            <input type="text" name="title">
        </label>
        <br>
        <label for="">Url proyecto
            <br>
            <input type="text" name="url">
        </label>
        <br>
        <label for="">Descripción
            <br>
            <textarea name="description" id="" cols="30" rows="4"></textarea>
        </label>
        <br>
        <button>Guardar</button>

    </form>
    
@endsection