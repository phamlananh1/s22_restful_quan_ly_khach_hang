<?php
namespace App\Services\Impl;

use App\Repositories\CustomerRepository;
use App\Services\CustomerService;

class CustomerServiceImpl implements CustomerService
{
    protected $customerRepository;

    public function __construct(CustomerRepository $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }
    public function getAll()
    {
       $customers = $this->customerRepository->getAll();
       return $customers;
        // TODO: Implement getAll() method.
    }
    public function findById($id)
    {
        $customer = $this->customerRepository->findById($id);
        $statusCode = 200;
        if (!$customer)
            $statusCode = 404;
        $data = [
            'statusCode' =>$statusCode,
            'customers' =>$customer
        ];
        return $data;

        // TODO: Implement findById() method.
    }
    public function create($request)
    {
        $customer = $this->customerRepository->create($request);
        $statusCode = 201;
        if (!$customer)
            $statusCode = 500;
        $data = [
            'statusCode' =>$statusCode,
            'customers' =>$customer
        ];
        return $data;
        // TODO: Implement create() method.
    }
    public function destroy($id)
    {
     $customer = $this->customerRepository->findById($id);
     $statusCode = 404;
     $message = "User not found";
     if ($customer){
         $this->customerRepository->destroy($customer);
         $statusCode = 200;
         $message = 'Delete success';
     }
     $data =[
         'statusCode' =>$statusCode,
         'message' =>$message
     ];
     return $data;
        // TODO: Implement destroy() method.
    }

    public function update($request, $id)
    {
        // TODO: Implement update() method.
    }
}