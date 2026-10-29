<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{

    protected $table = 'citas';

    protected $fillable = ['nombre', 'correo', 'servicio', 'fecha', 'hora', 'mensaje'];

    const SERVICIOS = [
        'Corte de cabello',
        'Tinte y coloración',
        'Peinados para eventos',
        'Manicure y pedicure',
        'Tratamientos capilares',
    ];
}
