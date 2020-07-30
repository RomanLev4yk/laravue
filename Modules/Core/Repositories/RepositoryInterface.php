<?php

namespace Modules\Core\Repositories;

interface RepositoryInterface
{
    // Get all instances of model
    public function all();

    // create a new record in the database
    public function create(array $data);

    public function getWithFields(int $modelId, array $fields);

    // update record in the database
    public function update(array $data, $modelId);

    // remove record from the database
    public function delete($modelId);

    // show the record with the given id
    public function show($modelId);

    // Get the associated model
    public function getModel();

    // Set the associated model
    public function setModel($model);

    // Eager load database relationships
    public function with($relations);

    // Get with pagination
    public function paginate($perPage = 15, $columns = array('*'));
}
