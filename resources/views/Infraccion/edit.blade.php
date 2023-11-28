@extends('plantilla')

@section('title', 'Editar Infracción')
@section('content')

    <div class="container">
        <form action="{{ route('infracciones.update', $infraccion->id) }}" method="post">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="auto_id" class="form-label">Automotor</label>
                <select name="auto_id" class="form-select">
                    @foreach ($autos as $auto)
                        <option value="{{ $auto->id }}" {{ $infraccion->auto_id == $auto->id ? 'selected' : '' }}>
                            {{ $auto->patente }} - {{ $auto->marca }} {{ $auto->modelo }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="tipo" class="form-label">Tipo</label>
                <select name="tipo" class="form-select">
                    <option value="alta velocidad" {{ $infraccion->tipo == 'alta velocidad' ? 'selected' : '' }}>Alta Velocidad</option>
                    <option value="doble fila" {{ $infraccion->tipo == 'doble fila' ? 'selected' : '' }}>Doble Fila</option>
                    <option value="alcoholemia" {{ $infraccion->tipo == 'alcoholemia' ? 'selected' : '' }}>Alcoholemia</option>
                    <option value="falta de documentacion" {{ $infraccion->tipo == 'falta de documentacion' ? 'selected' : '' }}>Falta de Documentación</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea name="descripcion" class="form-control" rows="3">{{ $infraccion->descripcion }}</textarea>
            </div>

            <div class="mb-3">
                <label for="fecha" class="form-label">Fecha</label>
                <input type="date" name="fecha" class="form-control" value="{{ $infraccion->fecha }}">
            </div>

            <button type="submit" class="btn btn-primary">Actualizar Infracción</button>
        </form>
    </div>

@endsection
