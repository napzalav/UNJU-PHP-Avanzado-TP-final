@extends('plantilla')

@section('title', 'Lista de Automotores')

@section('content')
    <div class="container">
        {{-- <h2>Lista de Automóviles</h2> --}}
        <button class="btn btn-primary" type="button"><a href="/automotores/create"><i class="fa-solid fa-plus"></i> Nuevo Automotor</a></button>

        <table class="table table-striped table-hover">
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
                @foreach ($autos as $auto)
                    <tr>
                        <td>{{ $auto->titular->apellido }}, {{ $auto->titular->nombre }}</td>
                        <td>{{ $auto->marca }}</td>
                        <td>{{ $auto->modelo }}</td>
                        <td>{{ $auto->patente }}</td>
                        <td>{{ $auto->tipo }}</td>
                        <td>
                            <a href="{{ route('automotores.show', $auto->id) }}" class="btn btn-info"><i class="fa-solid fa-eye"></i></a>
                            <a href="{{ route('automotores.edit', $auto->id) }}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                            <form action="{{ route('automotores.destroy', $auto->id) }}" method="post"
                                style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('¿Estás seguro?')"><i class="fa-solid fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
