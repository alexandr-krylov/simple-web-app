<?php

namespace App\Http\Controllers;

use Core\Repository\{
    EmployeeRepositoryInterface,
    DepartmentRepositoryInterface
};

class EmployeeController extends Controller
{
    private $repository;
    private $departmentRepository;

    public function __construct(
        EmployeeRepositoryInterface $repository,
        DepartmentRepositoryInterface $departmentRepository
        )
    {
        $this->repository = $repository;
        $this->departmentRepository = $departmentRepository;
    }

    public function show()
    {
        $employees = $this->repository->all();
        if (empty($employees)) {
            $data['message']
            = ['type' => 'info', 'content' => 'Employees is empty'];
        }
        $data['activeEmployee'] = 'active';
        return view('employee', $data);
    }

    public function edit($id = null)
    {
        $data = [];
        $departments = $this->departmentRepository->all();
        $data['departments'] = $departments;
        return view('employeeEdit', $data);
    }
}
