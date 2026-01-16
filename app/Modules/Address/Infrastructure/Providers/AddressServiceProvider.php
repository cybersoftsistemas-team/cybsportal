<?php

namespace App\Modules\Address\Infrastructure\Providers;

use Illuminate\Support\ServiceProvider;

class AddressServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadMigrationsFrom(app_path('Modules/Address/Infrastructure/Persistence/Migrations'));
    }
}
