@extends('plantilla')

@section('title', 'Titulares')
@section('content')
    <div class="container">

        <button class="btn btn-primary" type="button"><a href="/titulares/create"><i class="fa-solid fa-plus"></i> Nuevo Titular</a></button>

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
                            <a href="{{ route('titulares.show', $titular->id) }}" class="btn btn-info"><i class="fa-solid fa-eye"></i></a>
                            <a href="{{ route('titulares.edit', $titular->id) }}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                            <form action="{{ route('titulares.destroy', $titular->id) }}" method="post"
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
