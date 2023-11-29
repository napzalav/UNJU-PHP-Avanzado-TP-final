@extends('plantilla')

@section('title', 'Resultados de la búsqueda')

@section('content')
    <div class="container mt-4">
        <h2>Resultados de la búsqueda para "{{ $query }}"</h2>

        <!-- Resultados de titulares -->
        {{-- <h3>Titulares</h3>
        @forelse ($titulares as $titular)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $titular->apellido }}, {{ $titular->nombre }}</h5>
                    <p class="card-text"><strong>DNI:</strong> {{ $titular->dni }}</p>
                </div>
            </div>
        @empty
            <p>No se encontraron titulares.</p>
        @endforelse --}}

        <!-- Resultados de titulares -->
        @foreach ($titulares as $titular)
            <!-- Aquí muestras la información del titular -->
            <p>{{ $titular->nombre }} {{ $titular->apellido }}</p>
            <!-- Agrega más detalles según sea necesario -->
        @endforeach



        <!-- Resultados de infracciones -->
        {{-- <h3>Infracciones</h3>
        @forelse ($infracciones as $infraccion)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">Infracción</h5>
                    <p class="card-text"><strong>Patente:</strong> {{ $infraccion->patente }}</p>
                    <!-- Agrega más detalles según tus necesidades -->
                </div>
            </div>
        @empty
            <p>No se encontraron infracciones.</p>
        @endforelse

        <!-- Resultados de automotores -->
        <h3>Automotores</h3>
        @forelse ($automotores as $automotor)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $automotor->marca }} {{ $automotor->modelo }}</h5>
                    <p class="card-text"><strong>Patente:</strong> {{ $automotor->patente }}</p>
                    <!-- Agrega más detalles según tus necesidades -->
                </div>
            </div>
        @empty
            <p>No se encontraron automotores.</p>
        @endforelse --}}
    </div>
@endsection
