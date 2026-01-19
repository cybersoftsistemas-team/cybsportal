<?php

namespace App\Modules\Country\Domain\Entities;

use App\Shared\Domain\Entities\Entity;

final class Country extends Entity
{
    protected function __construct(
        private string $id,
        private string $name,
        private int $areaCode
    )
    {
        parent::__construct();
        $this->id = $id;
        $this->name = $name;
        $this->areaCode = $areaCode;
    }

    public static function create(
        string $id,
        string $name,
        int $areaCode
    ): static
    {
        return new static($id, $name, $areaCode);
    }

    public function toData(): array
    {
        return [
            'Id' => $this->id,
            'Name' => $this->name,
            'AreaCode' => $this->areaCode,
        ];
    }

    public function id(): string { return $this->id; }
    public function name(): string { return $this->name; }
    public function areaCode(): int { return $this->areaCode; }
}
