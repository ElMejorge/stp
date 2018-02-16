<?php

namespace AhorroLibre\STP\Data;

class RegistraOrdenResponse
{
    /** @var string $id */
    private $id;

    /** @var bool $isError */
    private $isError = false;

    /** @var string|null $descriptionError */
    private $descriptionError;

    public function __construct(string $id, ?string $descriptionError)
    {
        $this->id = $id;
        if ($id == 0) {
            $this->isError = true;
        }
        $this->descriptionError = $descriptionError;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return bool
     */
    public function isError(): bool
    {
        return $this->isError;
    }

    /**
     * @return null|string
     */
    public function getDescriptionError(): ?string
    {
        return $this->descriptionError;
    }
}