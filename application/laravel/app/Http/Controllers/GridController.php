<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Core\Repository\EmployeeRepositoryInterface;
//use Core\Persistence\Laravel\EmployeeRepository;

class GridController extends Controller
{
    private $employeeRepository;

    public function __construct(EmployeeRepositoryInterface $repository)
    {
        $this->employeeRepository = $repository;
    }

    public function show()
    {
        //$this->employeeRepository = new EmployeeRepository();
        $employees = $this->employeeRepository->all();
        var_dump($this->employeeRepository);
        return view('grid', ['employees' => $employees]);
    }
}
