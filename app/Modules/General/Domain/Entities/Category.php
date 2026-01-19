<?php

namespace App\Modules\General\Domain\Entities;

use App\Shared\Domain\Entities\Entity;

final class Category extends Entity
{
    protected function __construct(
        private string $id, 
        private string $name, 
        private bool $reserved, 
        private ?string $parentId
    )
    {
        parent::__construct();
        $this->id = $id;
        $this->name = $name;
        $this->reserved = $reserved;
        $this->parentId = $parentId;
    }

    public static function create(
        string $id, 
        string $name, 
        ?string $parentId = null, 
        bool $reserved = false
    ): static
    {
        return new static($id, $name, $reserved, $parentId);
    }

    public function toData(): array
    {
        return [
            'Id' => $this->id,
            'Name' => $this->name,
            'Reserved' => $this->reserved,
            'ParentId' => $this->parentId,
        ];
    }

    public function id(): string { return $this->id; }
    public function name(): string { return $this->name; }
    public function reserved(): bool { return $this->reserved; }
    public function parentId(): ?string { return $this->parentId; }
}