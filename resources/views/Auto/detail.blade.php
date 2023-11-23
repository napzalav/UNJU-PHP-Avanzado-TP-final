<!-- resources/views/AUTO/show.blade.php -->

@extends('plantilla')

@section('title', 'Detalles del Automóvil')

@section('content')
    <div class="container">
        <h2>Detalles del Automóvil</h2>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Titular: {{ $auto->titular->apellido }}, {{ $auto->titular->nombre }}</h5>
                <p class="card-text"><strong>Marca:</strong> {{ $auto->marca }}</p>
                <p class="card-text"><strong>Modelo:</strong> {{ $auto->modelo }}</p>
                <p class="card-text"><strong>Patente:</strong> {{ $auto->patente }}</p>
                <p class="card-text"><strong>Tipo:</strong> {{ $auto->tipo }}</p>
                <a href="{{ route('autos.edit', $auto->id) }}" class="btn btn-warning">Editar</a>
                <form action="{{ route('autos.destroy', $auto->id) }}" method="post" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                </form>
                <a href="{{ route('autos.index') }}" class="btn btn-secondary">Volver a la lista</a>
            </div>
        </div>
    </div>
@endsection
