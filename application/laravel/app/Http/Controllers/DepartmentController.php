<?php

namespace App\Http\Controllers;

use Core\Repository\DepartmentRepositoryInterface;
use Core\Service\DepartmentFactory;

class DepartmentController extends Controller
{
    private $repository;

    public function __construct(DepartmentRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function show()
    {
        $departments = $this->repository->all();
        if (empty($departments)) {
            $data['message'] = ['type' => 'info', 'content' => 'Departments is empty'];
        } else {
            $data['rows'] = $departments;
        }
        $data['activeDepartment'] = 'active';
        return view('department', $data);
    }

    public function edit($id = null)
    {
        $data = [];
        if (null !== $id) {
            $department = $this->repository->id($id);
            $data['id'] = $department->getId();
            $data['name'] = $department->getName();
        }
        return view('departmentEdit', $data);
    }

    public function persist($id = null)
    {
        $data = $_POST;
        if (null !== $id) {
            $data['id'] = $id;
        }
        $department = (new DepartmentFactory())->create($data);
        $this->repository->persist($department);
        return redirect('department');
    }
}
