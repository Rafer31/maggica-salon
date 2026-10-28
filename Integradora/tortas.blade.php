@extends('layouts.base')

@section('contenido')
    <h2>Nuestras tortas</h2>

    <p>Somos una pastelería de barrio: tortas hechas cada día, con ingredientes frescos y mucho cariño.</p>

    <p>Hay <strong>{{ count($tortas) }}</strong> tortas en la vitrina.</p>

    <ul>
        @foreach ($tortas as $torta)
            <li>{{ $torta->sabor }} — Bs {{ $torta->precio }}</li>
        @endforeach
    </ul>

    <p>Vitrina atendida por Rafael Fernando Argote Zeballos</p>

    <p><a href="/tortas/nuevo">+ Registrar una torta</a></p>
@endsection
