@extends('plantilla')
@section('title', 'Alta de Titular')
@section('formulario')

    <form action="{{ route('titulares.store') }}" method="post" class="formulario">
        @csrf
        <div class="form-group">
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" class="form-control" id="apellido" placeholder="Doe">
        </div>
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Jhon">
        </div>
        <div class="form-group">
            <label for="dni">Número de documento</label>
            <input type="text" name="dni" class="form-control" id="dni" placeholder="xx.xxx.xxx">
        </div>
        <div class="form-group">
            <label for="domicilio">Domicilio</label>
            <input type="text" name="domicilio" class="form-control" id="domicilio" placeholder="Av. Siempreviva 742">
        </div>
        <br>
        <button type="submit" class="btn btn-primary mb-2">Crear Titular</button>
    </form>

@endsection
