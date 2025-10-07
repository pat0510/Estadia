<?php

namespace App\Repositories;

use App\Models\Usuarios;
use App\Repositories\BaseRepository;

class UsuariosRepository extends BaseRepository
{
    protected $fieldSearchable = [
        
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Usuarios::class;
    }
}
