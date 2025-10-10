<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    protected $table = 'Medicamentos';         // tu tabla real
    protected $primaryKey = 'idMedicamento';   // tu PK real
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'presentacion',
        'indicaciones',
        'efectosSecundarios',
        'imagenMedicamento',
    ];
}
