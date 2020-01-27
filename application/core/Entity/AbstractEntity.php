<?php

namespace SimpleApplication\Grid\Core\Entity;

abstract class AbstractEntity
{
    protected $id;

    public function getId()
    {
        return $this->id;
    }

    public function setId(?int $id)
    {
        $this->id = $id;
        return $this;
    }
}