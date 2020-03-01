<?php

namespace App\Http\Controllers;

use Core\Repository\EmployeeRepositoryInterface;

class GridController extends Controller
{
    private $repository;

    public function __construct(EmployeeRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function show()
    {
        $employees = $this->repository->all();
        $data['employees'] = $employees;
        if (empty($employees)) {
            $data['message'] = ['type' => 'info', 'content' => 'Grid is empty'];
        }
        $data['activeGrid'] = 'active';
        return view('grid', $data);
    }
}
