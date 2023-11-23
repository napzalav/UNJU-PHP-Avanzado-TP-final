@extends('plantilla')

@section('title', 'Titulares')
@section('content')
    <div class="d-grid gap-2">
        <button class="btn btn-primary" type="button"><a href="/titulares/create"><i>Nuevo</i></a></button>
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
            @foreach ($titulares as $titular)
                <tr>
                    <td>{{ $titular->apellido }}</td>
                    <td>{{ $titular->nombre }}</td>
                    <td>{{ $titular->dni }}</td>
                    <td>{{ $titular->domicilio }}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                            <button type="button" class="btn btn-outline-info"><a
                                    href="{{ route('titulares.detail', $titular->id) }}">Ver</a></button>
                            <a href="{{ route('titulares.edit', $titular->id) }}"
                                class="btn btn-outline-secondary">Editar</a>
                            <form action="{{ route('titulares.destroy', $titular->id) }}" method="post"
                                style="display:inline;"
                                onsubmit="return confirm('¿Estás seguro de que deseas eliminar este titular?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
