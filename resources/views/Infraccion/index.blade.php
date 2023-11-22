@extends('plantilla')

@section('title', 'Infracciones')
@section('content')

<div class="d-grid gap-2">
    <button class="btn btn-primary" type="button"><a href="/infracciones/create"><i>Nuevo</i></a></button>
</div>

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Patente</th>
            <th>Tipo</th>
            <th>Descripción</th>
            <th>Fecha</th>
            <th>Panel</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>ABC123</td>
            <td>Falta de documentación</td>
            <td>El conductor no presenta seguro</td>
            <td>2023-11-11</td>
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