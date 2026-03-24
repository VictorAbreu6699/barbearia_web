<?php

namespace App\Repositories;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;


class AbstractRepository
{
    protected Model $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function all(array $columns = ['*']): Collection
    {
        return $this->model->all($columns);
    }
    
    public function find(int $id, array $columns = ['*']): ?Model
    {
        return $this->model->find($id, $columns);
    }

    public function findBy(string $field, $value, array $columns = ['*']): Collection
    {
        return $this->model->where($field, $value)->get($columns);
    }
    
    public function create(array $data): Model
    {
        return $this->model->create($data);
    }

    public function update(int $id, array $data): bool
    {
        $item = $this->model->findOrFail($id);

        return $item->update($data);
    }
    
    public function delete(int $id): bool
    {
        $item = $this->model->findOrFail($id);

        return (bool) $item->delete();
    }

    public function firstOrCreate(array $attributes, array $values = []): Model
    {
        return $this->model->firstOrCreate($attributes, $values);
    }
}