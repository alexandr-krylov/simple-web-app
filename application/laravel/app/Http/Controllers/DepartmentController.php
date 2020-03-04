<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

    public function persist(Request $request, $id = null)
    {
        $data = $request->all();
        if (null !== $id) {
            $data['id'] = $id;
        }
        $department = (new DepartmentFactory())->create($data);
        $this->repository->persist($department);
        return redirect('department');
    }

    public function delete(Request $request)
    {
        try {
            $id = $request->input('id');
            $this->repository->delete($id);
            echo json_encode(['success' => true]);
        } catch (Exception $e) {
            echo json_encode(['success' => false, 'error' => $e->getMessage()]);
        }
    }
}
