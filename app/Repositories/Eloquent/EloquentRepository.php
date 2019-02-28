<?php
namespace App\Repositories\Eloquent;

use App\Repositories\Repository;

abstract class EloquentRepository implements Repository
{
    protected $model;
    public function __construct()
    {
        $this->setModel();
    }
    abstract public function getModel();

    public function setModel()
    {
        $this->model = app()->make($this->getModel());
    }
    public function getAll()
    {
        // TODO: Implement getAll() method.
        $result = $this->model->all();
        return $result;
    }
    public function findById($id)
    {
        // TODO: Implement findById() method.
        $result = $this->model->find($id);
        return $result;
    }
    public function create($data)
    {
    try {
        $object =$this->model->create($data);
    } catch (\Exception $e) {
        return null;
    }
    return $object;
        // TODO: Implement create() method.
    }

    public function update($data, $object)
    {
    $object->update($data);
    return $object;
        // TODO: Implement update() method.
    }
    public function destroy($object)
    {
    $object->delete();
        // TODO: Implement destroy() method.
    }



}