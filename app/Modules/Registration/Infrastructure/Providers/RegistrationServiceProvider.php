<?php

namespace App\Modules\Registration\Infrastructure\Providers;

use Illuminate\Support\ServiceProvider;

class RegistrationServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadMigrationsFrom(app_path('Modules/Registration/Infrastructure/Persistence/Migrations'));
    }
}
