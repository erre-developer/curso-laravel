@extends('layout')

@section('title', 'Crear Proyecto')

@section('content')
    <h1>Crear nuevo Proyecto</h1>

    <form method="POST" action="{{ route('projects.store') }}">
        @csrf
        <label for="">Titulo proyecto
            <br>
            <input type="text" name="title" value="{{ old('title') }}">{{$errors->first('title')}}
        </label>
        <br>
        <label for="">Url proyecto
            <br>
            <input type="text" name="url" value="{{ old('url') }}">{{$errors->first('url')}}
        </label>
        <br>
        <label for="">Descripción
            <br>
            <textarea name="description" id="" cols="30" rows="4">{{ old('description') }}</textarea>{{$errors->first('description')}}
        </label>
        <br>
        <button>Guardar</button>

    </form>
    
@endsection