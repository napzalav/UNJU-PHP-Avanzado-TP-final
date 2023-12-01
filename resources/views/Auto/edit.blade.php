@extends('plantilla')

@section('title', 'Editar Automóvil')

@section('content')
    <div class="container">
        <form action="{{ route('automotores.update', $auto->id) }}" method="post">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="titular_id" class="form-label">Titular</label>
                <select name="titular_id" class="form-select">
                    @foreach ($titulares as $titular)
                        <option value="{{ $titular->id }}" {{ $auto->titular_id == $titular->id ? 'selected' : '' }}>
                            {{ $titular->apellido }}, {{ $titular->nombre }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="marca" class="form-label">Marca</label>
                <input type="text" name="marca" class="form-control" id="marca" value="{{ $auto->marca }}">
            </div>

            <div class="mb-3">
                <label for="modelo" class="form-label">Modelo</label>
                <input type="text" name="modelo" class="form-control" id="modelo" value="{{ $auto->modelo }}">
            </div>

            <div class="mb-3">
                <label for="patente" class="form-label">Patente</label>
                <input type="text" name="patente" class="form-control" id="patente" value="{{ $auto->patente }}">
            </div>

            <div class="mb-3">
                <label for="tipo" class="form-label">Tipo</label>
                <select name="tipo" class="form-select">
                    <option value="standar" {{ $auto->tipo == 'standar' ? 'selected' : '' }}>Standard</option>
                    <option value="suv" {{ $auto->tipo == 'suv' ? 'selected' : '' }}>SUV</option>
                    <option value="camioneta" {{ $auto->tipo == 'camioneta' ? 'selected' : '' }}>Camioneta</option>
                    <option value="camion" {{ $auto->tipo == 'camion' ? 'selected' : '' }}>Camión</option>
                </select>
            </div>

            <a href="{{ route('automotores.index') }}" class="btn btn-secondary"><i class="fa-solid fa-backward"></i> Volver</a>
            <button type="submit" class="btn btn-primary">Actualizar Automóvil</button>
        </form>
    </div>
@endsection
