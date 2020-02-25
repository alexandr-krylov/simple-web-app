<?php

namespace App\Http\Controllers;

use Core\Repository\EmployeeRepositoryInterface;

class EmployeeController extends Controller
{
    private $repository;

    public function __construct(EmployeeRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function show()
    {
        $employees = $this->repository->all();
        if (empty($employees)) {
            $data['message'] = ['type' => 'info', 'content' => 'Employees is empty'];
        }
        $data['activeEmployee'] = 'active';
        return view('employee', $data);
    }
}
