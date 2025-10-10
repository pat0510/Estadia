<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'usuarios';
    protected $primaryKey = 'idUsuario';

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

    protected $hidden = [
        'contrasena',
        'remember_token',
    ];

    public $timestamps = false;

    /**
     * 🔐 Indica a Laravel que la contraseña está en la columna 'contrasena'
     * (por defecto buscaría 'password')
     */
    public function getAuthPassword()
    {
        return $this->contrasena;
    }
}
