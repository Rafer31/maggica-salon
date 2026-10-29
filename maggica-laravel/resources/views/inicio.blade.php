@extends('layouts.base')

@section('contenido')
  <section>
    <h2>Belleza y cuidado personal en Oruro</h2>
    <p>Somos un salón de belleza en Oruro. Atendemos con cita previa para que tengas tu espacio asegurado y no esperes de más.</p>
    <p><a href="/citas/nueva">Pide tu cita aquí</a></p>
  </section>

  <section>
    <h2>Servicios</h2>
    <ul class="servicios">
      @foreach ($servicios as $servicio)
        <li>{{ $servicio }}</li>
      @endforeach
    </ul>
  </section>
@endsection
