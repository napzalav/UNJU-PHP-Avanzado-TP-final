@extends('plantilla')

@section('title', 'Automotores')
@section('content')

    <div class="d-grid gap-2">
        <button class="btn btn-primary" type="button"><a href="/automotores/create"><i>Nuevo</i></a></button>
    </div>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titular</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Patente</th>
                <th>Tipo</th>
                {{-- <th>Infracciones</th> --}}
                <th>Panel</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Apellido1 Nombre1</td>
                <td>Marca1</td>
                <td>Modelo1</td>
                <td>Patente1</td>
                <td>Tipo1</td>
                {{-- <td>
                    <ul>
                        <li>
                            <button type="button" class="btn btn-outline-info">Infracción1</button>
                        </li>
                        <li>
                            <button type="button" class="btn btn-outline-info">Infracción2</button>
                        </li>
                    </ul>
                </td> --}}
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
