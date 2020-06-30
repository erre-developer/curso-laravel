@extends('layout')

@section('title', 'Protafolio | ' . $project->title)

@section('content')

    @include('partials.validation-errors')
    
    @include('partials.session-status')

    <h1>{{$project->title }}</h1>
    <a href="{{ route('projects.edit',$project)}}">Editar</a>
    
    <form method="POST" action="{{ route('projects.destroy',$project)}}">
        @csrf @method('DELETE')

        <button>Eliminar</button>
    </form>

    <p>{{$project->description }}</p>
    <p> {{$project->created_at->diffForHumans()}} </p>
    <br>
    <a href="{{ route('projects.index') }}">Volver a proyectos</a>
    
@endsection


