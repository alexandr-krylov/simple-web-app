<?php
namespace Core\Persistence\Laravel;

use Core\Repository\EmployeeRepositoryInterface;
//use App\Employee;

class EmployeeRepository extends AbstractRepository
implements EmployeeRepositoryInterface
{
    public function all()
    {
        //return Employee::all();
    }
}
