<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'Usuarios';
    protected $primaryKey = 'idUsuario';
    public $incrementing = true;
    public $timestamps = false;

    protected $fillable = [
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

    protected $hidden = ['contrasena'];
}
