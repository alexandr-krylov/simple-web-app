<?php

namespace App\Http\Controllers;

class DepartmentController extends Controller
{
    public function show()
    {
        $data['activeDepartment'] = 'active';
        return view('department', $data);
    }
}