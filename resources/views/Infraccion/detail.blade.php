@extends('plantilla')

@section('title', 'Detalles de la Infracción')

@section('content')
    <div class="container" style="display: flex; justify-content: center;">
        <div class="card mb-3">
            <img src="https://www.carroya.com/noticias/sites/default/files/entradillas/58113983multas-de-transito.jpg" alt="Card image cap" style="
            height: 240px;
            width: 470px;
            background-size: cover;
        ">
            <div class="card-body">
                <h3 class="card-title">Titular: {{ $infraccion->auto->titular->apellido }},
                    {{ $infraccion->auto->titular->nombre }}</h3>
                <p>Automotor: {{ $infraccion->auto->marca }} {{ $infraccion->auto->modelo }} (Patente:
                    {{ $infraccion->auto->patente }})</p>
                <p>Fecha: {{ $infraccion->fecha }}</p>
                <p>Descripción: {{ $infraccion->descripcion }}</p>
                <p>Tipo: {{ $infraccion->tipo }}</p>

                <p class="card-text"><small class="text-muted">Creado el: {{ $infraccion->created_at }}</small></p>
                <p class="card-text"><small class="text-muted">Última modificación: {{ $infraccion->updated_at }}</small></p>

                <a href="{{ route('infracciones.index') }}" class="btn btn-secondary"><i class="fa-solid fa-backward"></i>
                    Volver</a>
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
