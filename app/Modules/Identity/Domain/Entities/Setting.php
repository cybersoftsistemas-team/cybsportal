<?php

namespace App\Modules\Identity\Domain\Entities;

use App\Shared\Domain\Entities\Entity;

final class Setting extends Entity
{
    protected function __construct(
        private string $userId,
        private string $optionId,
        private bool $checked,
    )
    {
        parent::__construct();
        $this->userId = $userId;
        $this->optionId = $optionId;
        $this->checked = $checked;
    }

    public static function create(
        string $userId,
        string $optionId,
        bool $checked,
    ): static
    {
        return new static($userId, $optionId, $checked);
    }

    public function toData(): array
    {
        return [
            'UserId' => $this->userId,
            'OptionId' => $this->optionId,
            'Checked' => $this->checked,
        ];
    }

    public function userId(): string { return $this->userId; }
    public function optionId(): string { return $this->optionId; }
    public function checked(): bool { return $this->checked; }
}
