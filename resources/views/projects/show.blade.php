@extends('layout')

@section('title', 'Portafolio | ' . $project->title)

@section('content')

    <div class="container">

        <div class="bg-white p-5 shadow rounded">

            <h1>{{ $project->title }}</h1>
            <p class="text-secondary">{{ $project->description }}</p>
            <p class="text-black-50">{{ $project->created_at->diffForHumans() }}</p>

            @auth

            <div class="row">

                <div class="col-auto">
                    <a class="btn btn-primary mr-0" href="{{ route('projects.edit', $project) }}">Editar Proyecto</a>
                </div>

                <div class="col-auto p-0">
                    <form method="POST" action="{{ route('projects.destroy', $project) }}">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger">Eliminar Proyecto</button>
                    </form>
                </div>

                <div class="col-auto">
                    <a class="btn btn-outline-primary mr-0" href="{{ route('projects.index') }}">Regresar a Proyectos</a>
                 </div>

            </div>

            @endauth

        </div>

    </div>


@endsection
