<?php

namespace App\Http\Controllers;

use Core\Repository\DepartmentRepositoryInterface;

class DepartmentController extends Controller
{
    private $repository;

    public function __construct(DepartmentRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function show()
    {
        $departments = $repository->all();
        if (empty($departments)) {
            $data['message'] = ['type' => 'info', 'content' => 'Departments is empty'];
        }
        $data['activeDepartment'] = 'active';
        return view('department', $data);
    }
}