<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Core\Entity\Employee;
class GridController extends Controller
{
    public function show()
    {
        $employee = new Employee();
        var_dump($employee);
    }
}