<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    public $table = 'usuarios';

    public $fillable = [
        'nombre',
        'apellido',
        'correo',
        'contrasena',
        'fechaNacimiento',
        'sexo',
        'telefono',
        'tipoUsuario',
        'estadoCuenta'
    ];

    protected $casts = [
        'nombre' => 'string',
        'apellido' => 'string',
        'correo' => 'string',
        'contrasena' => 'string',
        'fechaNacimiento' => 'date',
        'sexo' => 'string',
        'telefono' => 'string',
        'tipoUsuario' => 'string',
        'estadoCuenta' => 'string'
    ];

    public static array $rules = [
        'nombre' => 'required',
        'correo' => 'required|email',
        'contrasena' => 'required|min:6',
        'tipoUsuario' => 'required',
        'estadoCuenta' => 'required'
    ];

    
}
