<?php

namespace App\Http\Controllers;

use Core\Repository\{
    EmployeeRepositoryInterface,
    DepartmentRepositoryInterface
};
use Illuminate\Http\Request;
use Core\Service\EmployeeFactory;

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
        if (null !== $id) {
            $employee = $this->repository->id($id);
            $data['id'] = $employee->getId();
            $data['name'] = $employee->getName();
            $data['surname'] = $employee->getSurname();
            $data['patronymic'] = $employee->getPatronymic();
            $data['gender'] = $employee->getPatronymic();
            $data['salary'] = $employee->getSalary();
            $data['departments'] = $employee->getDepartments();
        }
        $departments = $this->departmentRepository->all();
        $data['departments'] = $departments;
        return view('employeeEdit', $data);
    }

    public function persist(Request $request, $id = null)
    {
        $data = $request->all();
        if (null !== $id) {
            $data['id'] = $id;
        }
        $employee = (new EmployeeFactory())->create($data);
        $this->repository->persist($employee);
        return redirect('employee');
    }
}
