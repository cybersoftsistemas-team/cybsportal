<?php

namespace App\Modules\Address\Domain\Entities;

use App\Shared\Domain\Entities\Entity;

final class State extends Entity
{
    protected function __construct(
        private string $id, 
        private string $name, 
        private string $acronym,
        private string $countryId,
    )
    {
        parent::__construct();
        $this->id = $id;
        $this->name = $name;
        $this->acronym = $acronym;
        $this->countryId = $countryId;
    }

    public static function create(
        string $id, 
        string $name, 
        string $acronym,
        string $countryId,
    ): static
    {
        return new static($id, $name, $acronym, $countryId);
    }

    public function toData(): array
    {
        return [
            'Id' => $this->id,
            'Name' => $this->name,
            'Acronym' => $this->acronym,
            'CountryId' => $this->countryId,
        ];
    }

    public function id(): string { return $this->id; }
    public function name(): string { return $this->name; }
    public function acronym(): string { return $this->acronym; }
    public function countryId(): string { return $this->countryId; }
}