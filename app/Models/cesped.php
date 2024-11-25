<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cesped extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_cesped',
        'fecha_ingreso',
        'importe',
        'cesped_activo',
        'descripcion',
        'mail_origen',
    ];

    protected $casts = [
        'fecha_ingreso' => 'datetime',
    ];
}
