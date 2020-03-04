<?php

namespace Core\Repository;

use Core\Entity\AbstractEntity;

interface RepositoryInterface
{
    public function all();
    public function persist(AbstractEntity $entity);
    public function id($id);
    public function delete($id);
}