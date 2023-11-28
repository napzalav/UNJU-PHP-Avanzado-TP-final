@extends('plantilla')

@section('title', 'Lista de Infracciones')
@section('content')

    <div class="container">
        <button class="btn btn-primary" type="button"><a href="/infracciones/create"><i class="fa-solid fa-plus"></i> Nueva
                infracción</a></button>

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Patente</th>
                    <th>Tipo</th>
                    <th>Descripción</th>
                    <th>Fecha</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($infracciones as $infraccion)
                    <tr>
                        <td>{{ $infraccion->id }}</td>
                        <td>{{ $infraccion->auto->patente }}</td>
                        <td>{{ $infraccion->tipo }}</td>
                        <td>{{ $infraccion->descripcion }}</td>
                        <td>{{ $infraccion->fecha }}</td>
                        <td>
                            <a href="{{ route('infracciones.show', $infraccion->id) }}" class="btn btn-info"><i
                                    class="fa-solid fa-eye"></i></a>
                            <a href="{{ route('infracciones.edit', $infraccion->id) }}" class="btn btn-warning"><i
                                    class="fa-solid fa-pen-to-square"></i></a>
                            <form action="{{ route('infracciones.destroy', $infraccion->id) }}" method="post"
                                style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('¿Estás seguro que deseas eliminar esta infracción?')"><i
                                        class="fa-solid fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
