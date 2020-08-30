@extends('layout')

@section('title', 'Crear Proyecto')

@section('content')

  @include('partials.validation-errors')

  <div class="container">

    <div class="row">

        <div class="col-12 col-sm-10 col-lg-6 mx-auto">

            <h1 class="display-4 mb-3">Editar proyecto</h1>

            @include('partials.validation-errors')

            <form class="bg-white shadow rounded py-3 px-4"
                  method="POST" action="{{ route('projects.update', $project) }}">

                @method('PATCH')

                @include('projects._form', ['btnText' => 'Actualizar'])

            </form>

        </div>

    </div>

  </div>

@endsection
