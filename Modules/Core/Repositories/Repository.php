<?php

namespace Modules\Core\Repositories;

use Illuminate\Database\Eloquent\Model;

abstract class Repository implements RepositoryInterface
{
    // model property on class instances
    protected $model;

    // Constructor to bind model to repo
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function show($modelId)
    {
        return $this->model->findOrFail($modelId);
    }

    public function getWithFields(int $modelId, array $fields)
    {
        return $this->model->where('id', $modelId)->first($fields);
    }

    public function all()
    {
        return $this->model->all();
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    /*refactoring to update_as */
    public function update(array $data, $modelId)
    {
        $record = $this->model->find($modelId);
        $record->update($data);
        return $record;
    }

    public function delete($modelId)
    {
        return $this->model->destroy($modelId);
    }

    public function getModel()
    {
        return $this->model;
    }

    public function setModel($model)
    {
        $this->model = $model;
        return $this;
    }

    public function with($relations)
    {
        return $this->model->with($relations);
    }

    /**
     * @param int $perPage
     * @param array $columns
     * @return mixed
     */
    public function paginate($perPage = 15, $columns = array('*'))
    {
        return $this->model->paginate($perPage, $columns);
    }

    public function save($model)
    {
        return $model->save();
    }

    public function newInstance(array $attributes = [])
    {
        return $this->model->newInstance($attributes);
    }

    /**
    * @param string|int $value
    * @param string $key
    *
    * @return \Illuminate\Database\Eloquent\Collection
    */
    public function getList($value, $key = 'id')
    {
        return $this->model->pluck($value, $key);
    }

    /**
    * Creates a new transaction
    *
    * @param \Closure $callback
    * @return mixed
    */
    public function transaction(\Closure $callback)
    {
        return app('db')->transaction($callback);
    }

    /**
    * Escape raw string
    *
    * @param $str
    * @return mixed
    */
    protected function escape($str)
    {
        return trim(app('db')->getPdo()->quote($str), '\'');
    }
}
