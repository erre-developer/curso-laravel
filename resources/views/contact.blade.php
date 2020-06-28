@extends('layout')

@section('title', 'Contact')

@section('content')
    <h1>Contacto</h1>

<form method="POST" action="{{ route('contactoPost') }}">
    @csrf
    
        <input type="text" name="name" placeholder="Nombre..." value="{{ old('name') }}"><br>
        {!! $errors->first('name', '<small>:message</small><br>') !!}
        
        <input type="email" name="email" placeholder="Email..." value="{{ old('email') }}"><br>
        {!! $errors->first('email', '<small>:message</small><br>') !!}
        
        <input type="text" name="subject" placeholder="Asunto..." value="{{ old('subject') }}"><br>
        {!! $errors->first('subject', '<small>:message</small><br>') !!}
        
        <textarea name="content" placeholder="contenido ....">{{ old('content') }}</textarea><br>
        {!! $errors->first('content', '<small>:message</small><br>') !!}
        <br>
        <button>Enviar</button>
    </form>
@endsection