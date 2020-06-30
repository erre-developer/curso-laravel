@extends('layout')

@section('title', 'Crear Proyecto')

@section('content')
    <h1>Crear nuevo Proyecto</h1>

    @include('partials.validation-errors')

    @include('partials.session-status')
    
    <form method="POST" action="{{ route('projects.store') }}">
        
        @include('projects._form',['btnText'=>'Guardar'])

    </form>
    
@endsection