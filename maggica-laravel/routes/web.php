<?php

use App\Models\Cita;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('inicio', ['servicios' => Cita::SERVICIOS]);
});

Route::get('/contacto', function () {
    return view('contacto');
});


Route::get('/citas/nueva', function () {
    return view('citas-nueva', ['servicios' => Cita::SERVICIOS]);
});


Route::post('/citas', function () {
    $hoy = now('America/La_Paz')->toDateString();
    request()->validate([
        'nombre' => 'required',
        'correo' => 'required|email',
        'servicio' => 'required|in:' . implode(',', Cita::SERVICIOS),
        'fecha' => 'required|date|after_or_equal:' . $hoy,
        'hora' => 'required',
    ], [

        'nombre.required' => 'Escribe tu nombre para poder atenderte.',
        'correo.required' => 'Escribe tu correo para poder responderte.',
        'correo.email' => 'Ese correo no parece correo: revisa que tenga @ y un dominio.',
        'servicio.required' => 'Elige el servicio que quieres.',
        'servicio.in' => 'Ese servicio no está en nuestra lista. Elige uno del menú.',
        'fecha.required' => 'Elige el día de tu cita.',
        'fecha.date' => 'Esa fecha no es válida.',
        'fecha.after_or_equal' => 'La fecha no puede ser anterior a hoy.',
        'hora.required' => 'Elige la hora de tu cita.',
    ]);

    Cita::create([
        'nombre' => request()->input('nombre'),
        'correo' => request()->input('correo'),
        'servicio' => request()->input('servicio'),
        'fecha' => request()->input('fecha'),
        'hora' => request()->input('hora'),
        'mensaje' => request()->input('mensaje'),
    ]);


    return redirect('/citas/nueva')->with('exito', 'Cita recibida. Te escribiremos al correo para confirmarla.');
});

Route::get('/login', function () {
    return view('login');
});
Route::post('/login', function () {
    $credenciales = [
        'email' => request()->input('email'),
        'password' => request()->input('password'),
    ];

    if (Auth::attempt($credenciales)) {

        request()->session()->regenerate();

        return redirect('/panel');
    }

    return back()->with('error', 'Correo o contraseña incorrectos.');
});

Route::post('/logout', function () {
    Auth::logout();

    return redirect('/');
});

Route::get('/panel', function () {

    $citas = Cita::orderBy('fecha')->orderBy('hora')->get();

    return view('panel', ['citas' => $citas]);
})->middleware('auth');
