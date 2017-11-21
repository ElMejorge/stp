<?php

namespace AhorroLibre\STP\Data;

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