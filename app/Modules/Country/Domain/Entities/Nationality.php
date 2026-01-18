<?php

namespace App\Modules\Country\Domain\Entities;

use App\Shared\Domain\Entities\Entity;

final class Nationality extends Entity
{
    public function __construct(
        private string $id,
        private string $name,
        private string $countryId,
    ) {
        parent::__construct();
        $this->id = $id;
        $this->name = $name;
        $this->countryId = $countryId;
    }

    public static function create(
        string $id,
        string $name,
        string $countryId,
    ): static
    {
        return new static($id, $name, $countryId);
    }

    public function toData(): array
    {
        return [
            'Id' => $this->id,
            'Name' => $this->name,
            'CountryId' => $this->countryId,
        ];
    }

    public function id(): string { return $this->id; }
    public function name(): string { return $this->name; }
    public function countryId(): string { return $this->countryId; }
}
