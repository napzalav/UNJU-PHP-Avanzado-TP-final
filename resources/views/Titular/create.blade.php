@extends('plantilla')
@section('title', 'Alta de Titular')
@section('formulario')

    <form action="" method="post" class="formulario">
        <div class="form-group">
            <div class="form-group">
                <label for="apellido">Apellido</label>
                <input type="text" class="form-control" id="apellido" placeholder="Doe">
            </div>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" placeholder="Jhon">
            </div>
        </div>
        <div class="form-group">
            <label for="dni">Número de documento</label>
            <input type="text" class="form-control" id="dni" placeholder="xx.xxx.xxx">
        </div>
        <div class="form-group">
            <label for="direccion">Dirección</label>
            <input type="text" class="form-control" id="direccion" placeholder="Av. Siempreviva 742">
        </div>
        <br>
        <button type="submit" class="btn btn-primary mb-2">Crear Titular</button>
    </form>


@endsection
