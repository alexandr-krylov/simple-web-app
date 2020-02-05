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
    
}
