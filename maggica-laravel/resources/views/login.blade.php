@extends('layouts.base')

@section('contenido')
  <section>
    <h2>Entrar al panel</h2>

    @if (session('error'))
      <p class="error">{{ session('error') }}</p>
    @endif

    <form action="/login" method="POST">
      @csrf

      <label for="email">Correo</label>
      <input type="email" id="email" name="email" value="{{ old('email') }}" required>

      <label for="password">Contraseña</label>
      <input type="password" id="password" name="password" required>

      <button type="submit">Entrar</button>
    </form>
  </section>
@endsection
