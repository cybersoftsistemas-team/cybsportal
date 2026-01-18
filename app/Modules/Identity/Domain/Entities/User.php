<?php

namespace App\Modules\Identity\Domain\Entities;

use App\Shared\Domain\Entities\Entity;
use Illuminate\Support\Carbon;

final class User extends Entity
{
    protected function __construct(
        private string $id,
        private string $name,
        private string $description,
        private bool $accountBlockedOut,
        private ?Carbon $accountExpiresDate,
        private bool $reserved,
        private string $password,
        private ?string $personId,
    )
    {
        parent::__construct();
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->accountBlockedOut = $accountBlockedOut;
        $this->accountExpiresDate = $accountExpiresDate;
        $this->reserved = $reserved;
        $this->password = $password;
        $this->personId = $personId;
    }

    public static function create(
        string $id,
        string $name,
        string $description,
        bool $accountBlockedOut,
        ?Carbon $accountExpiresDate,
        bool $reserved,
        string $password,
        ?string $personId,
    ): static
    {
        return new static(
            $id,
            $name,
            $description,
            $accountBlockedOut,
            $accountExpiresDate,
            $reserved,
            $password,
            $personId
        );
    }

    public function toData(): array
    {
        return [
            'Id' => $this->id,
            'Name' => $this->name,
            'Description' => $this->description,
            'AccountBlockedOut' => $this->accountBlockedOut,
            'AccountExpiresDate' => $this->accountExpiresDate,
            'Reserved' => $this->reserved,
            'Password' => $this->password,
            'PersonId' => $this->personId,
        ];
    }

    public function id(): string { return $this->id; }
    public function name(): string { return $this->name; }
    public function description(): string { return $this->description; }
    public function accountBlockedOut(): bool { return $this->accountBlockedOut; }
    public function accountExpiresDate(): ?Carbon { return $this->accountExpiresDate; }
    public function reserved(): bool { return $this->reserved; }
    public function password(): string { return $this->password; }
    public function personId(): ?string { return $this->personId; }
}
