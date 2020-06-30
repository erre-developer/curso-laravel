@extends('layout')

@section('title', 'Portafolio')

@section('content')
    <h1>Portafolio</h1>
    <a href="{{ route('projects.create') }}">Crear nuevo proyecto</a>
    <br><br>

    @include('partials.session-status')
    
    @forelse ($projects as $project)

        <li><a href=" {{ route('projects.show', $project) }}">  {{$project->title}}  </a></li>

    @empty
        <li>No hay proyectos que mostrar   </li>
    @endforelse
     
    {{ $projects->links() }}
    
@endsection