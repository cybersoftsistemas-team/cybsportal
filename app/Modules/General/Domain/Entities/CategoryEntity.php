<?php

namespace App\Modules\General\Domain\Entities;

final class CategoryEntity
{
    private string $id;
    private string $name;
    private bool $reserved;
    private ?string $parentId;

    private function __construct(string $id, string $name, bool $reserved, ?string $parentId)
    {
        $this->id = $id;
        $this->name = $name;
        $this->reserved = $reserved;
        $this->parentId = $parentId;
    }

    /**
     * Factory para criar uma nova categoria (ativa/normalmente não reservada).
     */
    public static function create(string $id, string $name, ?string $parentId = null, bool $reserved = false): self
    {
        return new self($id, $name, $reserved, $parentId);
    }

    // Getters
    public function id(): string { return $this->id; }
    public function name(): string { return $this->name; }
    public function reserved(): bool { return $this->reserved; }
    public function parentId(): ?string { return $this->parentId; }
}