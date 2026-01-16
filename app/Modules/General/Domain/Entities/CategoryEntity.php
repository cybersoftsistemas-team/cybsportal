<?php

namespace App\Modules\General\Domain\Entities;

final class CategoryEntity extends Entity
{
    private function __construct(
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

    public static function create(string $id, string $name, ?string $parentId = null, bool $reserved = false): self
    {
        return new self($id, $name, $reserved, $parentId);
    }

    public function id(): string { return $this->id; }
    public function name(): string { return $this->name; }
    public function reserved(): bool { return $this->reserved; }
    public function parentId(): ?string { return $this->parentId; }
}