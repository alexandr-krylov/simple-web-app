<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Core\Entity\Employee;
use Core\Repository\EmployeeRepository;

class GridController extends Controller
{
    private $employeeRepository;

    public function __construct(ElployeeRepository $repository)
    {
        $this->employeeRepository = $repository;
    }

    public function show()
    {
        $employees = $this->employeeRepository->getAll();
        return view('grid', ['employees' => $employees]);
    }
}