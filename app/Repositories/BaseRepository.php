<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

abstract class BaseRepository
{
    /** @var Model */
    protected $model;

    public function __construct()
    {
        $this->makeModel();
    }

    /**
     * Debe retornar FQCN del modelo, p.ej. App\Models\Medicamento::class
     */
    abstract public function model(): string;

    /**
     * Crea la instancia del modelo a partir del contenedor.
     */
    protected function makeModel(): void
    {
        $model = app()->make($this->model());

        if (! $model instanceof Model) {
            throw new \RuntimeException("Class {$this->model()} must be an instance of Illuminate\\Database\\Eloquent\\Model");
        }

        $this->model = $model;
    }

    /** ====== Métodos CRUD básicos ====== */

    public function all(): Collection
    {
        return $this->model->newQuery()->get();
    }

    public function paginate(int $perPage = 15)
    {
        return $this->model->newQuery()->paginate($perPage);
    }

    public function find($id): ?Model
    {
        return $this->model->newQuery()->find($id);
    }

    public function create(array $data): Model
    {
        return $this->model->newQuery()->create($data);
    }

    public function update(array $data, $id): ?Model
    {
        $record = $this->find($id);
        if ($record) {
            $record->update($data);
        }
        return $record;
    }

    public function delete($id): int
    {
        return $this->model->newQuery()->whereKey($id)->delete();
    }
}
