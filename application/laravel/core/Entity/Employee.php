<?php

namespace Core\Entity;

class Employee extends AbstractEntity
{
    protected $name;
    protected $surname;
    protected $patronymic;
    protected $gender;
    protected $salary;
    protected $departments = [];

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function setSurname($surname)
    {
        $this->surname = $surname;
        return $this;
    }

    public function getPatronymic()
    {
        return $this->patronymic;
    }

    public function setPatronymic($patronymic)
    {
        $this->patronymic = $patronymic;
        return $this;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
        return $this;
    }

    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
        return $this;
    }

    public function getDepartments()
    {
        return $this->departments;
    }

    public function setDepartments($departments)
    {
        $this->departments = $departments;
        return $this;
    }
}
