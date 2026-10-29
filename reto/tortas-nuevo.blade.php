@extends('layouts.base')

@section('contenido')
    <h2>Registrar una torta</h2>

    @if ($errors->any())
        <ul style="color: #b00020;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="/tortas/nuevo" method="POST">
        @csrf

        <p>
            <label for="sabor">Sabor de la torta:</label><br>
            <input type="text" id="sabor" name="sabor">
        </p>

        <p>
            <label for="precio">Precio en Bs:</label><br>
            <input type="number" id="precio" name="precio">
        </p>

        <p>
            <label for="stock">Stock (unidades en la vitrina):</label><br>
            <input type="number" id="stock" name="stock">
        </p>

        <p><button type="submit">Registrar torta</button></p>
    </form>

    <p><a href="/tortas">&larr; Volver a la lista</a></p>
@endsection
