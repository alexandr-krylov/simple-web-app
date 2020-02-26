<?php
namespace Core\Persistence\Laravel;

use Core\Repository\EmployeeRepositoryInterface;
use Core\Entity\AbstractEntity;


class EmployeeRepository extends AbstractRepository
implements EmployeeRepositoryInterface
{

    private $table = 'employees';

    public function all()
    {
        $result = $this->dbh->query("select * from $this->table");
        var_dump($result);
    }

    public function persist(AbstractEntity $employee)
    {
        var_dump('persist employee');
    }
}
