@extends('layout')

@section('title', 'Crear Proyecto')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 col-sm10 col-lg-6 mx-auto">
            
            @include('partials.validation-errors')
            
            @include('partials.session-status')
            
            <form class="bg-light py-3 px-4 shadow rounded" method="POST" action="{{ route('projects.store') }}">
                
                <h1 class="display-4">Nuevo Proyecto</h1>
                <hr>
                @include('projects._form',['btnText'=>'Guardar'])

            </form>
        </div>
    </div>

</div>
    
    
@endsection