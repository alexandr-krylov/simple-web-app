<?php

namespace Core\Persistence\Laravel;

use Core\Repository\DepartmentRepositoryInterface;
use Core\Entity\AbstractEntity;

class DepartmentRepository extends AbstractRepository
implements DepartmentRepositoryInterface
{

    private $table = 'departments';

    public function all()
    {
        $result = $this->dbh->query("select * from $this->table");
        var_dump($result);
    }

    public function persist(AbstractEntity $department)
    {
        if (null !== $department->getId()) {
            $count = $this->dbh
            ->exec("UPDATE $this->table" .
            " SET name = \"{$department->getName()}\"" .
            " WHERE id = $department->getId()");
        } else {
            $count = $this->dbh
            ->exec("INSERT $this->table (name)" .
            " VALUES (\"{$department->getName()}\")");
        }
        var_dump($count, $this->dbh->errorCode(), $this->dbh->errorInfo());
    }
}
