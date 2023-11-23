@extends('plantilla')

@section('title', 'Titulares')
@section('content')
    <div class="container">

        <button class="btn btn-primary" type="button"><a href="/titulares/create"><i>Nuevo Titular</i></a></button>

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
                            <a href="{{ route('titulares.edit', $titular->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('titulares.destroy', $titular->id) }}" method="post"
                                style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                            </form>
                            <a href="{{ route('titulares.show', $titular->id) }}" class="btn btn-info">Ver</a>
                            {{-- <div class="btn-group" role="group" aria-label="Basic outlined example">
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
                            </div> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
