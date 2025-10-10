<?php

namespace App\Repositories;

use App\Models\Medicamento;

class MedicamentosRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'nombre',
        'presentacion',
        'indicaciones',
        'efectosSecundarios',
        'imagenMedicamento',
    ];

    public function model(): string
    {
        return Medicamento::class;
    }
}
