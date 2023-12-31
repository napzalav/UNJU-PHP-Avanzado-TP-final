@extends('plantilla')

@section('title', 'Detalles del Titular')
@section('content')
    <div>
        <div class="card mb-3">
            <img class="card-img-top"
                src="https://play-lh.googleusercontent.com/HKtQ5WjczxJz5lffo1tIR_5pgxVcv4J9EXEdAZFLR8pB55oHYSifXfmPcL2jgsQ75g"
                alt="Card image cap"
                style="height: 320px;
                width: 320px;
                background-size: cover;">
            <div class="card-body">
                <h5 class="card-title">{{ $titular->apellido }}, {{ $titular->nombre }} </h5>
                <li><strong>DNI:</strong> {{ $titular->dni }}</li>
                <li><strong>Dirección:</strong> {{ $titular->domicilio }}</li>
                <br>

                <li><strong>Vehículos registrados: </strong>
                    <ul>
                        @foreach($titular->autos as $auto)
                            <li><a href="{{ route('automotores.show', $auto->id) }}">{{ $auto->patente }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li><strong>Infracciones registradas: </strong>
                    <!-- Utilizo la relación autos para contar los vehículos y sumar las infracciones -->
                    <ul>
                        @foreach($titular->autos as $auto)
                            @foreach($auto->infracciones as $infraccion)
                                <li><a href="{{ route('infracciones.show', $infraccion->id) }}">{{ $infraccion->tipo }}</a></li>
                            @endforeach
                        @endforeach
                    </ul>
                </li>
                <br>

                <p class="card-text"><small class="text-muted">Creado el: {{ $titular->created_at }}</small></p>
                <p class="card-text"><small class="text-muted">Última modificación: {{ $titular->updated_at }}</small>
                </p>
            </div>
        </div>

        {{-- botonera para editar y eliminar --}}
        <div>
            <a href="{{ route('titulares.index') }}" class="btn btn-secondary"><i class="fa-solid fa-backward"></i>
                Ir a lista de Titulares</a>
            <a href="{{ route('titulares.edit', $titular->id) }}" class="btn btn-warning"><i
                    class="fa-solid fa-pen-to-square"></i> Editar</a>
            <form action="{{ route('titulares.destroy', $titular->id) }}" method="post" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"
                    onclick="return confirm('¿Estás seguro que desea eliminar este Titular?')"><i
                        class="fa-solid fa-trash"></i> Eliminar</button>
            </form>
        </div>
    </div>

@endsection
