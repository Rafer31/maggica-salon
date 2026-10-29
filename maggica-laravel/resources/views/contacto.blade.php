@extends('layouts.base')

@section('contenido')
  <section>
    <h2>Horarios de atención</h2>
    <ul>
      <li>Lunes a viernes: 09:00 a 19:00</li>
      <li>Sábados: 09:00 a 17:00</li>
      <li>Domingos: cerrado</li>
    </ul>
  </section>

  <section>
    <h2>Dónde estamos</h2>
    <p>Dirección: Calle 6 de Octubre #1234, zona Central, Oruro, Bolivia</p>
    <p>Atención con cita previa, de lunes a sábado.</p>
    <p><a href="/citas/nueva">Pedir una cita</a></p>
  </section>
@endsection
