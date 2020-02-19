<?php
namespace Core\Persistence\Laravel;

use Core\Repository\EmployeeRepositoryInterface;

class EmployeeRepository extends AbstractRepository
implements EmployeeRepositoryInterface
{

    private $table = 'employees';

    public function all()
    {
        $result = $this->dbh->query("select * from $this->table");
        var_dump($result);
    }
}
