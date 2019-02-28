<?php
namespace App\Repositories\Impl;

use App\Customer;
use App\Repositories\Eloquent\EloquentRepository;
use App\Repositories\CustomerRepository;

class CustomerRepositoryImpl extends EloquentRepository implements CustomerRepository
{
    public function getModel()
    {
        $model = Customer::class;
        return $model;
    }
}