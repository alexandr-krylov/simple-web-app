<?php

namespace Core\Service;

use Core\Entity\Department;

class DepartmentFactory 
{
    public function create(array $data) : Department
    {
        $department = new Department();
        if (key_exists('id', $data)) {
            $department->setId($data['id']);
        }
        if (key_exists('name', $data)) {
            $department->setName($data['name']);
        }
        return $department;
    }
}
