@extends('layout')

@section('title', 'Home')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <h1 class="display-4 text-primary">Desarrollo Web</h1>
                <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur quibusdam sint mollitia ab et fugiat saepe at, corporis praesentium eos dolorum minima accusamus voluptates nemo sit doloribus dignissimos distinctio assumenda reprehenderit ipsum quisquam. Alias commodi a similique soluta. Error repudiandae qui odio perferendis molestiae ea non amet et maxime earum.</p>
            
                <a class="btn btn-lg btn-block btn-primary" href="{{ route('projects.index')}}">Portafolio</a>
                <a class="btn btn-lg btn-block btn-outline-primary" href="{{ route('contacto')}}">Contactanos</a>
            </div>
            <div class="col-12 col-lg-6">
                <img class="img-fluid my-4" src="/img/home.svg" alt="">
            </div>
        </div>
    </div>

@endsection