<?php

namespace App\Queries;

abstract class BaseQuery
{
    abstract public function model();

    public function all()
    {
        return $this->model()->all();
    }

    public function find($id)
    {
        return $this->model()->find($id);
    }

    public function findOrFail($id)
    {
        return $this->model()->findOrFail($id);
    }

    public function findWithTrashed($id)
    {
        return $this->model()->withTrashed()->find($id);
    }

    public function findByColumnName($column, $value)
    {
        return $this->model()->where($column, $value)
            ->firstOrFail();
    }

    public function create($data)
    {
        return $this->model()->create($data);
    }

    public function insert($data)
    {
        return $this->model()->insert($data);
    }

    public function updateOrCreate($condition, $data)
    {
        return $this->model()->updateOrCreate($condition, $data);
    }

    public function insertOrIgnore($data)
    {
        return $this->model()->insertOrIgnore($data);
    }
}
