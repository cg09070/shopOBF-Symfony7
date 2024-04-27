<?php

namespace App\Model;

class Item
{
    public function __construct(
        private int $id,
        private string $title,
        private string $author,
        private string $path,
        private float $price
    ) {
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getPath(): string
    {
        return $this->path;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}
