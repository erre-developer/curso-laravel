@extends('layout')

@section('title', 'Editar Proyecto')

@section('content')
    <h1>Editar Proyecto</h1>

    @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
   

    <form method="POST" action="{{ route('projects.update', $project) }}">
        @csrf @method('PATCH')

        <label for="">Titulo proyecto
            <br>
            <input type="text" name="title" value="{{ old('title' , $project->title)}}">
        </label>
        <br>
        <label for="">Url proyecto
            <br>
            <input type="text" name="url"  value="{{ old('url',$project->url)}}">
        </label>
        <br>
        <label for="">Descripción
            <br>
            <textarea name="description" id="" cols="30" rows="4">{{ old('description',$project->description)}}</textarea>
        </label>
        <br>
        <button>Actualizar</button>

    </form>
    
@endsection