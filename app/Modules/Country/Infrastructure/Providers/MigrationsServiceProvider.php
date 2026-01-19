<?php

namespace App\Modules\Country\Infrastructure\Providers;

use App\Shared\Infrastructure\Providers\ModuleServiceProvider;

class MigrationsServiceProvider extends ModuleServiceProvider
{
    public function boot(): void
    {
        $this->loadMigrations('Country');
    }
}
