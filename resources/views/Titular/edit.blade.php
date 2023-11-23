@extends('plantilla')

@section('title', 'Editar Titular')
@section('formulario')

    <form action="{{ route('titulares.update', $titular->id) }}" method="post" class="formulario">
        @csrf
        @method('PUT') {{-- Utiliza el método PUT para la actualización --}}

        <div class="form-group">
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" class="form-control" id="apellido" value="{{ $titular->apellido }}">
        </div>
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" id="nombre" value="{{ $titular->nombre }}">
        </div>
        <div class="form-group">
            <label for="dni">Número de documento</label>
            <input type="text" name="dni" class="form-control" id="dni" value="{{ $titular->dni }}">
        </div>
        <div class="form-group">
            <label for="direccion">Dirección</label>
            <input type="text" name="direccion" class="form-control" id="direccion" value="{{ $titular->domicilio }}">
        </div>
        <br>
        <div style="
        display: flex;
        align-items: flex-start;
    ">
            <a href="{{ route('titulares.index') }}" class="btn btn-secondary"><i class="fa-solid fa-backward"></i> Volver</a>
            <button type="submit" class="btn btn-primary mb-2">Actualizar Titular</button>
        </div>
    </form>

@endsection
