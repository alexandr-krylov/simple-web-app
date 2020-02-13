<?php

namespace Core\Persistence\Laravel;

use Core\Repository\EmployeeRepositoryInterface;
use App\Employee;

class EmployeeRepository implements EmployeeRepositoryInterface
{
    public function all()
    {
        return Employee::all();
    }
}
