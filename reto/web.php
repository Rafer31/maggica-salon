<?php

use App\Models\Torta;
use Illuminate\Support\Facades\Route;

Route::get('/tortas', function () {
    $tortas = Torta::all();
    return view('tortas', ['tortas' => $tortas]);
});

Route::get('/tortas/nuevo', function () {
    return view('tortas-nuevo');
});

Route::post('/tortas/nuevo', function () {
    request()->validate([
        'sabor' => 'required',
        'precio' => 'required|integer',
        'stock' => 'required|integer',
    ], [
        'sabor.required' => 'Indica el sabor de la torta.',
        'precio.required' => 'Indica el precio de la torta.',
        'precio.integer' => 'El precio va en digitos, sin centavos.',
        'stock.required' => 'Indica cuántas tortas hay en la vitrina.',
        'stock.integer' => 'El stock va en dígitos, sin decimales.',
    ]);

    Torta::create([
        'sabor' => request()->input('sabor'),
        'precio' => request()->input('precio'),
        'stock' => request()->input('stock'),
    ]);

    return redirect('/tortas');
});
