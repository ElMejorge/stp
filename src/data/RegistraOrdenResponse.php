<?php

namespace AhorroLibre\STP\Data;

/**
 * Created by PhpStorm.
 * User: macbook
 * Date: 11/21/17
 * Time: 11:47 AM
 */
class RegistraOrdenResponse
{
    /** @var string */
    private $id;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return RegistraOrdenResponse
     */
    public function setId(string $id): RegistraOrdenResponse
    {
        $this->id = $id;
        return $this;
    }
}