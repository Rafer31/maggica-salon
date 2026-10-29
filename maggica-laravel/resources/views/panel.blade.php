
@extends('layouts.base')

@section('contenido')
  <section>
    <h2>Hola, {{ auth()->user()->name }}</h2>
    <p>Entraste con <strong>{{ auth()->user()->email }}</strong>. Estas son las citas que pidieron tus clientas.</p>

    <h3>Citas ({{ count($citas) }})</h3>

    @if (count($citas) === 0)
      <p>Todavía no hay citas. Cuando alguien llene el formulario, aparecerá aquí.</p>
    @else
      <div class="tabla-scroll">
        <table>
          <thead>
            <tr>
              <th>Día</th>
              <th>Hora</th>
              <th>Cliente</th>
              <th>Correo</th>
              <th>Servicio</th>
              <th>Mensaje</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($citas as $cita)
              <tr>
                <td>{{ $cita->fecha }}</td>
                <td>{{ substr($cita->hora, 0, 5) }}</td>
                <td>{{ $cita->nombre }}</td>
                <td>{{ $cita->correo }}</td>
                <td>{{ $cita->servicio }}</td>
                <td>{{ $cita->mensaje }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    @endif
    <form action="/logout" method="POST">
      @csrf
      <button type="submit">Salir</button>
    </form>
  </section>
@endsection
