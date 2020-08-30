@extends('layout')

@section('title', 'Contact')

@section('content')

    <div class="container">

        <div class="row">

            <div class="col-12 col-sm-10 col-lg-6 mx-auto">

                <form class="bg-white shadow rounded py-3 px-4" method="POST" action="{{ route('messages.store') }}">

                    <h1 class="display-4">Contacto</h1>
                    <hr>

                    @csrf

                    <div class="form-group">
                        <label for="name"></label>
                        <input class="form-control bg-light shadow-sm border-0 @error('name') is-invalid @enderror"
                            type="text"
                            name="name"
                            id="name"
                            placeholder="Nombre"
                            value="{{ old('name') }}">
                            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                    </div>

                    <div class="form-group">
                        <label for="email"></label>
                        <input class="form-control bg-light shadow-sm border-0 @error('email') is-invalid @enderror"
                            type="text"
                            name="email"
                            id="email"
                            placeholder="Email"
                            value="{{ old('email') }}">
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                    </div>

                    <div class="form-group">
                        <label for="subject"></label>
                        <input class="form-control bg-light shadow-sm border-0 @error('subject') is-invalid @enderror"
                            type="text"
                            name="subject"
                            id="subject"
                            placeholder="Asunto"
                            value="{{ old('subject') }}">
                            @error('subject')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                    </div>

                    <div class="form-group">
                        <label for="content"></label>
                        <textarea class="form-control bg-light shadow-sm border-0 @error('content') is-invalid @enderror"
                            name="content"
                            id="content"
                            placeholder="Mensaje..."
                            value="{{ old('content') }}">
                        </textarea>
                        @error('content')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <button class="btn btn-primary btn-block btn-lg">Enviar</button><br>
                </form>

            </div>

        </div>

    </div>

@endsection
