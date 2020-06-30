@extends('layout')

@section('title', 'Protafolio | ' . $project->title)

@section('content')

    <h1>{{$project->title }}</h1>
    <a href="{{ route('projects.edit',$project)}}">Editar</a>
    <p>{{$project->description }}</p>
    <p> {{$project->created_at->diffForHumans()}} </p>
    <br>
    <a href="{{ route('projects.index') }}">Volver a proyectos</a>
    
@endsection


