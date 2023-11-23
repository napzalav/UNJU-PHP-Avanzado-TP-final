@extends('plantilla')

@section('title', 'Lista de Automotores')

@section('content')
    <div class="container">
        <h2>Lista de Automóviles</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Titular</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Patente</th>
                    <th>Tipo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($autos as $auto)
                    <tr>
                        <td>{{ $auto->titular->apellido }}, {{ $auto->titular->nombre }}</td>
                        <td>{{ $auto->marca }}</td>
                        <td>{{ $auto->modelo }}</td>
                        <td>{{ $auto->patente }}</td>
                        <td>{{ $auto->tipo }}</td>
                        <td>
                            <a href="{{ route('automotores.edit', $auto->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('automotores.destroy', $auto->id) }}" method="post" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                            </form>
                            <a href="{{ route('automotores.show', $auto->id) }}" class="btn btn-info">Ver</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
