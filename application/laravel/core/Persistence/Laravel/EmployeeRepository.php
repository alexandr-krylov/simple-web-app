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
    }

    public function persist(AbstractEntity $employee)
    {
    }

    public function id($id)
    {
        
    }
    public function delete($id)
    {

    }
}
