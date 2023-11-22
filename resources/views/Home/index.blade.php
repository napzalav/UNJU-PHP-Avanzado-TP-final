@extends('plantilla')

@section('title', 'Home')
@section('content')

    {{-- <div class="card-deck">
        @foreach ($noticias as $noticia)
            <div class="row row-cols-1 row-cols-sm-2 g-4" style="justify-content: center; padding:5px">
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ $noticia['imagen'] }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $noticia['title'] }}</h5>
                            <p class="card-text">{{ $noticia['cuerpo'] }}</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-body-secondary">Last updated 3 mins ago</small>
                        </div>
                        <a href="/noticias/details" class="btn btn-primary">Ver detalle</a>
                        <a href="{{ route('noticia', $noticia['slug']) }}" class="btn btn-success">Ver detalle desde con slug</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div> --}}

    {{-- </div> --}}
@endsection