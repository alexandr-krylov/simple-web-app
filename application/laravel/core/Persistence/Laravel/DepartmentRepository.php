<?php

namespace Core\Persistence\Laravel;

use Core\Repository\DepartmentRepositoryInterface;
use Core\Entity\AbstractEntity;
use Core\Service\DepartmentFactory;

class DepartmentRepository extends AbstractRepository
implements DepartmentRepositoryInterface
{

    private $table = 'departments';
    private $factory;

    public function __construct()
    {
        parent::__construct();
        $this->factory = new DepartmentFactory();
    }

    public function all()
    {
        $result = $this->dbh->query("select * from $this->table");
        $returnArray = [];
        if ($result) {
            foreach ($result as $row) {
                $returnArray[] = $this->factory->create($row);
            }
        }
        return $returnArray;
    }

    public function persist(AbstractEntity $department)
    {
        if (null !== $department->getId()) {
            $count = $this->dbh
            ->exec("UPDATE $this->table" .
            " SET name = \"{$department->getName()}\"," .
            " updated_at = now()" .
            " WHERE id = {$department->getId()}");
        } else {
            $count = $this->dbh
            ->exec("INSERT $this->table (name, created_at)" .
            " VALUES (\"{$department->getName()}\", now())");
        }
    }

    public function id($id)
    {
        $result = $this->dbh
        ->query("SELECT * FROM $this->table WHERE id = $id");
        if ($result) {
            foreach ($result as $row) {
                return $this->factory->create($row);
            }
        }
    }

    public function delete($id)
    {
        $count = $this->dbh->exec("DELETE $this->table WHERE id = $id");
    }
}
