@extends('layout')

@section('title', 'Portafolio')

@section('content')
    
<div class="container">
    
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="display-4">Portafolio</h1>
        
        @auth
            <a class="btn btn-primary btn-lg" href="{{ route('projects.create') }}">Crear nuevo proyecto</a>
        @endauth
        
    </div>
    <hr>
    <p class="lead text-secondary text-justify">Proyectos Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit placeat ut animi possimus iusto. Ea aut repellat, tempore pariatur qui omnis. Soluta tempora numquam possimus obcaecati debitis odio beatae nostrum!</p>
    
    <ul class="list-group">
        @forelse ($projects as $project)
    
        <li class="list-group-item border-0 mb-3 shadom-sm">
            <a class="d-flex justify-content-between aling-items-center text-secondary" href=" {{ route('projects.show', $project) }}">
                <span class="font-weight-bold">
                    {{$project->title}}
                </span>
                <span class="text-black-50">
                    {{$project->created_at->format('d-m-Y')}}
                </span>    
            </a>
        </li>
    
        @empty
            <li class="list-group-item border-0 mb-3 shadom-sm">
                No hay proyectos que mostrar   
            </li>
        @endforelse
    </ul>
    
    {{ $projects->links() }}
    
</div>
@endsection