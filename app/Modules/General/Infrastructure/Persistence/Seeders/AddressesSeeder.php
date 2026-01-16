<?php

namespace App\Modules\General\Infrastructure\Persistence\Seeders;

use App\Modules\General\Domain\Entities\CategoryEntity;
use App\Shared\Infrastructure\Persistence\Categories;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddressesSeeder extends Seeder
{
    public function run(): void
    {
        DB::transaction(function () {
            $category = $this->tryCreateAddress('4F8A1A7E-DC1E-4BD8-B2CB-0E2DF4F8A9C1', 'Addresses', null);
            $this->tryCreateAddress('9E7C5DA2-54C1-49B3-91C5-51CA7BE8F24A', 'Address', $category->Id());
            $this->tryCreateAddress('F1BD5F43-86DD-4AC3-93D3-6C9AF1C7A82E', 'Address 2', $category->Id());
            $this->tryCreateAddress('A0F42F11-97AA-4BB2-BF4A-E4539960D715', 'Outro', $category->Id());
        });
    }

    private function tryCreateAddress(string $id, string $name, ?string $parentId): CategoryEntity
    {
        return Categories::create(
            $id,
            $name,
            $parentId,
            true,
        );
    }
}