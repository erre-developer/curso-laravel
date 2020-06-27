@extends('layout')

@section('title', 'Portafolio')

@section('content')
    <h1>Portafolio</h1>

    @forelse ($portafolio as $item)
        <li>{{ $item ['title'] }} </li>
        @empty
<li>No hay proyectos que mostrar   </li>
    @endforelse
     
    
@endsection