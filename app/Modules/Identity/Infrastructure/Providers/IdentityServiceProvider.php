<?php

namespace App\Modules\Identity\Infrastructure\Providers;

use Illuminate\Support\ServiceProvider;

class IdentityServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadMigrationsFrom(app_path('Modules/Identity/Infrastructure/Persistence/Migrations'));
    }
}
