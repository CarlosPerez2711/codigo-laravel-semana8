@extends('layout')

@section('title', 'Contacto')

@section('content')
    <div class="container">
        <h1>Contacto</h1>

        <div class="row">
            <div class="col-md-8">
                <form action="{{ route('contacto.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" id="nombre" placeholder="Nombre" class="form-control" value="{{ old('nombre') }}">
                        @error('nombre')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Email" class="form-control" value="{{ old('email') }}">
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="asunto">Asunto</label>
                        <input type="text" name="asunto" id="asunto" placeholder="Asunto" class="form-control" value="{{ old('asunto') }}">
                        @error('asunto')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="mensaje">Mensaje</label>
                        <textarea name="mensaje" id="mensaje" placeholder="Mensaje" class="form-control">{{ old('mensaje') }}</textarea>
                        @error('mensaje')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <button type="reset" class="btn btn-secondary">Cancelar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
