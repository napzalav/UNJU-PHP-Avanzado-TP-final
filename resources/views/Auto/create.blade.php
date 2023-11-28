@extends('plantilla')

@section('title', 'Crear Automotor')
@section('formulario')

    <form action="{{ route('automotores.store') }}" method="post" class="formulario">
        @csrf

        <div class="form-group">
            <label for="titular_id">Titular</label>
            <select name="titular_id" class="form-control">
                @foreach ($titulares as $titular)
                    <option value="{{ $titular->id }}">{{ $titular->apellido }}, {{ $titular->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="marca">Marca</label>
            <input type="text" name="marca" class="form-control" id="marca" placeholder="Ejemplo: Toyota">
        </div>

        <div class="form-group">
            <label for="modelo">Modelo</label>
            <input type="text" name="modelo" class="form-control" id="modelo" placeholder="Ejemplo: Corolla">
        </div>

        <div class="form-group">
            <label for="patente">Patente</label>
            <input type="text" name="patente" class="form-control" id="patente" placeholder="Ejemplo: ABC123">
        </div>

        <div class="form-group">
            <label for="tipo">Tipo</label>
            <select name="tipo" class="form-control">
                <option value="standar">Standard</option>
                <option value="suv">SUV</option>
                <option value="camioneta">Camioneta</option>
                <option value="camion">Camión</option>
            </select>
        </div>

        <br>
        <button type="submit" class="btn btn-primary mb-2">Crear Automotor</button>
    </form>

@endsection
