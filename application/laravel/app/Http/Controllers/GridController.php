<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Core\Repository\EmployeeRepositoryInterface;

class GridController extends Controller
{
    private $employeeRepository;

    public function __construct(EmployeeRepositoryInterface $repository)
    {
        $this->employeeRepository = $repository;
    }

    public function show()
    {
        $employees = $this->employeeRepository->all();
        return view('grid', ['employees' => $employees]);
    }
}