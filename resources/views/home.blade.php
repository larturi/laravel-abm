@extends('layout')

@section('title', 'Home')

@section('content')

<div class="container">
    <div class="row">

        <div class="col-12 col-lg-6">
            <h1 class="display-4 text-primary">Desarrollo Web</h1>
            <p class="lead text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, accusantium corporis saepe repudiandae, expedita est dolorum sequi ea repellat quisquam temporibus nemo libero. Suscipit laborum odit deserunt nihil a vero!</p>

        <a class="btn btn-large btn-block btn-primary" href="{{ route('contact') }}">Contactame</a>
        <a class="btn btn-large btn-block btn-outline-primary" href="{{ route('projects.index') }}">Mis Proyectos</a>
        </div>

        <div class="col-12 col-lg-6">
            <img class="img-fluid m-4" src="/img/home.svg" alt="">
        </div>

    </div>
</div>


@endsection
