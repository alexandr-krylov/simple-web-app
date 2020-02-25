<?php

namespace Core\Persistence\Laravel;

use Core\Repository\DepartmentRepositoryInterface;

class DepartmentRepository extends AbstractRepository
implements DepartmentRepositoryInterface
{

    private $table = 'departments';

    public function all()
    {
        $result = $this->dbh->query("select * from $this->table");
        var_dump($result);
    }
}
