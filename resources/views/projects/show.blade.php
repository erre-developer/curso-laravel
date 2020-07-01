@extends('layout')

@section('title', 'Protafolio | ' . $project->title)

@section('content')

    @include('partials.validation-errors')

    <div class="container">
       <div class="bg-white p-5 shadow rounded">
        
        <h1>{{$project->title }}</h1>
        <p class="text-secondary">
            {{$project->description }}
        </p>
        <p class="text-black-50"> .
            {{$project->created_at->diffForHumans()}} 
        </p>
        <br>
        
        <div class="d-flex justify-content-between align-items-center">
            
            <a class="btn btn-secondary" href="{{ route('projects.index') }}">
                Regresar
            </a>
            @auth
                <div class="btn-group">
                    <a class="btn btn-primary" href="{{ route('projects.edit',$project)}}">
                        Editar
                    </a>
                    <a class="btn btn-danger" href="#" onclick="document.getElementById('delete-project').submit()">
                        Eliminar
                    </a>
                </div>
            @endauth
        </div>
       

        <form id="delete-project" method="POST" action="{{ route('projects.destroy',$project)}}">
            @csrf @method('DELETE')

        </form>

       </div>

        
    </div>

    
@endsection


