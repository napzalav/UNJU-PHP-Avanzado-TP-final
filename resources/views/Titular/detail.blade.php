@extends('plantilla')

@section('title', 'Detalles del Titular')
@section('content')
<div>
    <div class="card mb-3">
        <img class="card-img-top"
            src="https://play-lh.googleusercontent.com/HKtQ5WjczxJz5lffo1tIR_5pgxVcv4J9EXEdAZFLR8pB55oHYSifXfmPcL2jgsQ75g"
            alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">{{ $titular->apellido }}, {{ $titular->nombre }} </h5>
            <li><strong>DNI:</strong> {{ $titular->dni }}</li>
            <li><strong>Dirección:</strong> {{ $titular->domicilio }}</li>
            <br>
            <p class="card-text"><small class="text-muted">Creado el: {{ $titular->created_at }}</small></p>
            <p class="card-text"><small class="text-muted">Modificado la ultima vez: {{ $titular->updated_at }}</small></p>
        </div>
    </div>

    {{-- agregar la botonera para editar y eliminar --}}
    <div class="btn-group" role="group" aria-label="Basic outlined example">
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
</div>

@endsection
