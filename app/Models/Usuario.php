<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'Usuarios';          // Nombre real de tu tabla
    protected $primaryKey = 'idUsuario';    // Llave primaria
    public $timestamps = false;             // 🔹 Desactiva created_at y updated_at

    protected $fillable = [
        'nombre',
        'apellido',
        'email',
        'contrasena',
        'fechaNacimiento',
        'sexo',
        'telefono',
        'tipoUsuario',
        'estadoCuenta',
    ];

    protected $attributes = [
        'estadoCuenta' => 'activo',
    ];

    protected $casts = [
        'fechaNacimiento' => 'date',
    ];
}
