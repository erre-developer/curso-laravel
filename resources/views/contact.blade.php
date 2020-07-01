@extends('layout')

@section('title', 'Contact')

@section('content')

    <div class="container">

        <div class="row">
            <div class="col-12 col-sm-8 col-lg-7 mx-auto">
                <form class="bg-white shadow rounded py-3 px-4" method="POST" action="{{ route('contactoPost') }}">
                    @csrf
                
                    <h1 class="display-4">Contacto</h1>
                    <hr>
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input class="form-control bg-light shadow @error('name') is-invalid @else  border-0 @enderror" type="text" id="name" name="name" placeholder="Nombre..." value="{{ old('name') }}">
                        @error('name')
                            <span class="invalid-feefback">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control bg-light shadow @error('email') is-invalid @else  border-0 @enderror" type="email" id="email" name="email" placeholder="Email..." value="{{ old('email') }}">
                        @error('email')
                            <span class="invalid-feefback">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="subject">asunto</label>
                        <input class="form-control bg-light shadow @error('subject') is-invalid @else  border-0 @enderror" type="text" id="subject" name="subject" placeholder="Asunto..." value="{{ old('subject') }}">
                        @error('subject')
                            <span class="invalid-feefback">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="content">Contenido</label>
                        <textarea class="form-control bg-light shadow @error('content') is-invalid @else  border-0 @enderror" name="content" placeholder="contenido ....">{{ old('content') }}</textarea>
                        @error('content')
                            <span class="invalid-feefback">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    
                    <br>
                    <button class="btn btn-primary btn-lg btn-block">Enviar</button>
                </form>

            </div>
        </div>
        
    </div>
@endsection