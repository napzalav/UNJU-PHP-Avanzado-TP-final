@extends('plantilla')

@section('title', 'Municipalidad de San Martin')
@section('content')


    <div class="border"
        style="
    background: url('https://cervantesgas.com.ar/wp-content/uploads/conoce-los-derechos-y-responsabilidades-del-propietario-de-un-auto-por-patente.jpg');
    background-size: cover;
">
        <h2>Titulares</h2>
        <div class="detalles">
            <button type="button" class="btn btn-primary"><a href="/titulares"><i>Ver todos</i></a>
            </button>
            <button type="button" class="btn btn-success"><a href="/titulares/create"><i>Nuevo</i></a></button>
        </div>
    </div>

    <div class="border"
        style="
    background: url('https://img.freepik.com/fotos-premium/fila-autos-estacionados-estacionamiento-ia-generativa_97167-1884.jpg');
    background-size: cover;
">
        <h2>Automotores</h2>
        <div class="detalles">
            <button type="button" class="btn btn-primary"><a href="/automotores"><i>Ver todos</i></a>
            </button>
            <button type="button" class="btn btn-success"><a href="/automotores/create"><i>Nuevo</i></a></button>
        </div>
    </div>

    <div class="border"
        style="
    background: url('https://a0.cdnfan.com/images/M/2/3/1/1/multas_hd_145702.jpg');
    background-size: cover;
">
        <h2>Infracciones</h2>
        <div class="detalles">
            <button type="button" class="btn btn-primary"><a href="/infracciones"><i>Ver todos</i></a>
            </button>
            <button type="button" class="btn btn-success"><a href="/infracciones/create"><i>Nuevo</i></a></button>
        </div>
    </div>


@endsection
