@extends('layout')

@section('title', 'Portafolio')

@section('content')
    <h1>Portafolio</h1>

    @forelse ($projects as $item)
<li>{{ $item->title }}  --  <small>{{ $item->description }}</small> - Fechas: {{ $item->created_at->format('Y-m-d')}}</li>
        @empty
<li>No hay proyectos que mostrar   </li>
    @endforelse
     
    {{ $projects->links() }}
    
@endsection