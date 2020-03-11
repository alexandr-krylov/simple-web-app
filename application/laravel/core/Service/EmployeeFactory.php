<?php

namespace Core\Service;

use Core\Entity\{Employee, Department};

class EmployeeFactory
{
    public function create(array $data) : Employee
    {
        $employee = new Employee();
        $departments = [];
        foreach($data as $property => $value) {
            $setter = 'set' . ucfirst($property);
            if (method_exists($employee, $setter)) {
                $employee->$setter($value);
            } else {
                $departmentParts = explode('-', $property);
                if ($departmentParts[0] == 'department') {
                    if (key_exists($departmentParts[2], $departments)) {
                        $setter = 'set' . ucfirst($departmentParts[1]);
                        if (method_exists(
                            $departments[$departmentParts[2]], $setter
                            )) {
                            $departments[$departmentParts[2]]->$setter($value);
                        }
                    }
                }
            }
        }
        foreach ($departments as $department) {
            $employee->addDepartment($department);
        }
        return $employee;
    }
}