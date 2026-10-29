
@extends('layouts.base')

@section('contenido')
  <section>
    <h2>Pide tu cita</h2>


    @if (session('exito'))
      <p class="exito">
    @endif


    @if ($errors->any())
      <div class="error">
        <ul>
          @foreach ($errors->all() as $error)
            <li>
          @endforeach
        </ul>
      </div>
    @endif


    <form action="/citas" method="POST">


      @csrf

      <label for="nombre">Nombre</label>
      <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}" required>

      <label for="correo">Correo electrónico</label>
      <input type="email" id="correo" name="correo" value="{{ old('correo') }}" required>

      <label for="servicio">Servicio</label>
      <select id="servicio" name="servicio" required>
        <option value="">Elige un servicio</option>
        @foreach ($servicios as $servicio)
          <option value="{{ $servicio }}" {{ old('servicio') == $servicio ? 'selected' : '' }}>{{ $servicio }}</option>
        @endforeach
      </select>

      <label for="fecha">Día</label>
      <input type="date" id="fecha" name="fecha" min="{{ now('America/La_Paz')->toDateString() }}" value="{{ old('fecha') }}" required>

      <label for="hora">Hora</label>
      <input type="time" id="hora" name="hora" value="{{ old('hora') }}" required>

      <label for="mensaje">Mensaje (opcional)</label>
      <textarea id="mensaje" name="mensaje" rows="4">{{ old('mensaje') }}</textarea>

      <button type="submit">Pedir cita</button>
    </form>
  </section>
@endsection
