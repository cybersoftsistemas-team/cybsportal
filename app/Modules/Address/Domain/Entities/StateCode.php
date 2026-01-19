<?php

namespace App\Modules\Address\Domain\Entities;

use App\Shared\Domain\Entities\Entity;

final class StateCode extends Entity
{
    protected function __construct(
        private string $codeType,
        private string $code,
        private string $stateId,
    )
    {
        parent::__construct();
        $this->codeType = $codeType;
        $this->code = $code;
        $this->stateId = $stateId;
    }

    public static function create(
        string $codeType,
        string $code,
        string $stateId,
    ): static
    {
        return new static($codeType, $code, $stateId);
    }

    public function toData(): array
    {
        return [
            'CodeType' => $this->codeType,
            'Code' => $this->code,
            'StateId' => $this->stateId,
        ];
    }

    public function codeType(): string { return $this->codeType; }
    public function code(): string { return $this->code; }
    public function stateId(): string { return $this->stateId; }
}
