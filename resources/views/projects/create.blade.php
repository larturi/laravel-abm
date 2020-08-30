@extends('layout')

@section('title', 'Crear Proyecto')

@section('content')

<div class="container">

    <div class="row">

        <div class="col-12 col-sm-10 col-lg-6 mx-auto">

            <h1 class="display-4 mb-3">Crear proyecto</h1>

            @include('partials.validation-errors')

            <form class="bg-white shadow rounded py-3 px-4"
                  method="POST" action="{{ route('projects.store') }}">

                   @include('projects._form', ['btnText' => 'Guardar'])

            </form>

        </div>

    </div>

</div>

@endsection
