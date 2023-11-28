@extends('plantilla')

@section('title', 'Detalles del Automotor')

@section('content')
    <div class="container" style="
    display: flex;
    justify-content: center;
">
        <div class="card mb-3">
            <img class="card-img-top"
                src="https://img.freepik.com/fotos-premium/ruedas-neumaticos-coches-antiguos-estan-perfectas-condiciones_905683-52965.jpg"
                alt="Card image cap"
                style="
                height: 240px;
                width: 470px;
                background-size: cover;
            ">
            <div class="card-body">
                {{-- <h3 class="card-title">Titular: {{ $auto->titular->apellido }}, {{ $auto->titular->nombre }}</h3> --}}
                <h3 class="card-title">Titular:
                    <a href="{{ route('titulares.show', $auto->titular->id) }}">{{ $auto->titular->apellido }},
                        {{ $auto->titular->nombre }}</a>
                </h3>
                <p class="card-text"><strong>Marca:</strong> {{ $auto->marca }}</p>
                <p class="card-text"><strong>Modelo:</strong> {{ $auto->modelo }}</p>
                <p class="card-text"><strong>Patente:</strong> {{ $auto->patente }}</p>
                <p class="card-text"><strong>Tipo:</strong> {{ $auto->tipo }}</p>

                <p class="card-text"><small class="text-muted">Creado el: {{ $auto->created_at }}</small></p>
                <p class="card-text"><small class="text-muted">Última modificación: {{ $auto->updated_at }}</small></p>

                <a href="{{ route('automotores.index') }}" class="btn btn-secondary"><i class="fa-solid fa-backward"></i>
                    Ir a lista de Automotores</a>
                <a href="{{ route('automotores.edit', $auto->id) }}" class="btn btn-warning"><i
                        class="fa-solid fa-pen-to-square"></i> Editar</a>
                <form action="{{ route('automotores.destroy', $auto->id) }}" method="post" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"
                        onclick="return confirm('¿Estás seguro que deseas eliminar este automotor?')"><i
                            class="fa-solid fa-trash"></i> Eliminar</button>
                </form>
            </div>
        </div>
    @endsection
