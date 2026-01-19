<?php

namespace App\Modules\Country\Domain\Entities;

use App\Shared\Domain\Entities\Entity;

final class CountryCode extends Entity
{
    protected function __construct(
        private string $codeType,
        private string $code,
        private string $countryId,
    )
    {
        parent::__construct();
        $this->codeType = $codeType;
        $this->code = $code;
        $this->countryId = $countryId;
    }

    public static function create(
        string $codeType,
        string $code,
        string $countryId,
    ): static
    {
        return new static($codeType, $code, $countryId);
    }

    public function toData(): array
    {
        return [
            'Code' => $this->code,
            'CountryId' => $this->countryId,
            'CodeType' => $this->codeType,
        ];
    }

    public function codeType(): string { return $this->codeType; }
    public function code(): string { return $this->code; }
    public function countryId(): string { return $this->countryId; }
}
