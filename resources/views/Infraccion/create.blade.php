@extends('plantilla')

@section('title', 'Nueva Infracción')
@section('content')

    <div class="container">
        <form action="{{ route('infracciones.store') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="auto_id" class="form-label">Automotor</label>
                <select name="auto_id" class="form-select">
                    @foreach ($autos as $auto)
                        <option value="{{ $auto->id }}">{{ $auto->patente }} - {{ $auto->marca }} {{ $auto->modelo }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="tipo" class="form-label">Tipo</label>
                <select name="tipo" class="form-select">
                    <option value="alta velocidad">Alta Velocidad</option>
                    <option value="doble fila">Doble Fila</option>
                    <option value="alcoholemia">Alcoholemia</option>
                    <option value="falta de documentacion">Falta de Documentación</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea name="descripcion" class="form-control" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label for="fecha" class="form-label">Fecha</label>
                <input type="date" name="fecha" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Crear Infracción</button>
        </form>
    </div>

@endsection
