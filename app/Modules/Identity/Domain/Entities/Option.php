<?php

namespace App\Modules\Identity\Domain\Entities;

use App\Shared\Domain\Entities\Entity;

final class Option extends Entity
{
    protected function __construct(
        private string $id,
        private string $name,
        private string $description,
    )
    {
        parent::__construct();
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
    }

    public static function create(
        string $id,
        string $name,
        string $description,
    ): static
    {
        return new static($id, $name, $description);
    }

    public function toData(): array
    {
        return [
            'Id' => $this->id,
            'Name' => $this->name,
            'Description' => $this->description,
        ];
    }

    public function id(): string { return $this->id; }
    public function name(): string { return $this->name; }
    public function description(): string { return $this->description; }
}
