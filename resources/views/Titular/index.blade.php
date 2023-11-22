@extends('plantilla')

@section('title', 'Titulares')
@section('content')
<div class="d-grid gap-2">
    <button class="btn btn-primary" type="button"><a href="/automotores/create"><i>Nuevo</i></a></button>
</div>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Apellido</th>
                <th>Nombre</th>
                <th>DNI</th>
                <th>Dirección</th>
                <th>Panel</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Apellido1</td>
                <td>Nombre1</td>
                <td>DNI1</td>
                <td>Dirección1</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                        <button type="button" class="btn btn-outline-info">Ver</button>
                        <button type="button" class="btn btn-outline-secondary">Editar</button>
                        <button type="button" class="btn btn-outline-danger">Eliminar</button>
                    </div>
                </td>
            </tr>

        </tbody>
    </table>

@endsection
