<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
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
        var_dump(empty($employees));
        $data['employees'] = $employees;
        if (empty($employees)) {
            $data['message'] = ['type' => 'info', 'content' => 'Grid is empty'];
        }
        return view('grid', $data);
    }
}
