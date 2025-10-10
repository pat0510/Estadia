<?php

namespace App\Repositories;

use App\Models\Medicamento; // 👈 SINGULAR
// no uses App\Models\Medicamentos (plural)

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
        // 👇 Debe devolver SIEMPRE el FQCN del MODELO correcto
        return Medicamento::class;
    }
}
