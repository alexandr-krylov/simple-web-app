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
        }
        $data['activeDepartment'] = 'active';
        return view('department', $data);
    }

    public function edit($id = null)
    {
        var_dump($_POST);
        $data = [];
        return view('departmentEdit', $data);
    }

    public function persist($id = null)
    {
        var_dump($_POST, $id);
        echo 'persist';
        $data = $_POST;
        if (null !== $id) {
            $data['id'] = $id;
        }
        $department = (new DepartmentFactory())->create($data);
        $this->repository->persist($department);
        //return redirect('department');
    }
}
