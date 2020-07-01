@extends('layout')

@section('title', 'Editar Proyecto')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 col-sm10 col-lg-6 mx-auto">
                
                @include('partials.validation-errors')
                
                <form class="bg-white py-3 px-4 shadow rounded" method="POST" action="{{ route('projects.update', $project) }}">
                    
                    <h1 class="display-4">Editar Proyecto</h1>
                    
                    @method('PATCH')

                    @include('projects._form',['btnText'=>'Actualizar'])

                </form>
            </div>
        </div>
    </div>
    
@endsection