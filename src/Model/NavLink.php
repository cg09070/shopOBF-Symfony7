<?php

namespace App\Model;

class NavLink
{
    public function __construct(
        private int $id,
        private string $name,
        private string $path,
    ) {
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPath(): string
    {
        return $this->path;
    }
}
