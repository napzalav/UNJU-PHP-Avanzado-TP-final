@extends('plantilla')

@section('title', 'Detalles de la Infracción')

@section('content')
    <div class="container" style="display: flex; justify-content: center;">
        <div class="card mb-3">
            <img src="https://www.carroya.com/noticias/sites/default/files/entradillas/58113983multas-de-transito.jpg"
                alt="Card image cap"
                style="
            height: 240px;
            width: 470px;
            background-size: cover;
        ">
            <div class="card-body">
                <h3 class="card-title">Titular:
                    <a href="{{ route('titulares.show', $infraccion->auto->titular->id) }}">
                        {{ $infraccion->auto->titular->apellido }}, {{ $infraccion->auto->titular->nombre }}
                    </a>
                </h3>
                <p>Automotor:
                    <a href="{{ route('automotores.show', $infraccion->auto->id) }}">
                        {{ $infraccion->auto->marca }} {{ $infraccion->auto->modelo }} (Patente:
                        {{ $infraccion->auto->patente }})
                    </a>
                </p>
                <p>Fecha: {{ $infraccion->fecha }}</p>
                <p>Descripción: {{ $infraccion->descripcion }}</p>
                <p>Tipo: {{ $infraccion->tipo }}</p>

                <p class="card-text"><small class="text-muted">Creado el: {{ $infraccion->created_at }}</small></p>
                <p class="card-text"><small class="text-muted">Última modificación: {{ $infraccion->updated_at }}</small>
                </p>

                <a href="{{ route('infracciones.index') }}" class="btn btn-secondary"><i class="fa-solid fa-backward"></i>
                    Ir a lista de Infracciones</a>
                <a href="{{ route('infracciones.edit', $infraccion->id) }}" class="btn btn-warning"><i
                        class="fa-solid fa-pen-to-square"></i> Editar</a>
                <form action="{{ route('infracciones.destroy', $infraccion->id) }}" method="post"
                    style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"
                        onclick="return confirm('¿Estás seguro que deseas eliminar esta infracción?')"><i
                            class="fa-solid fa-trash"></i> Eliminar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
