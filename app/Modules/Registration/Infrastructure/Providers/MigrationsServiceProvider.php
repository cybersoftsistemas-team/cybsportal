<?php

namespace App\Modules\Registration\Infrastructure\Providers;

use App\Shared\Providers\ModuleServiceProvider;

class MigrationsServiceProvider extends ModuleServiceProvider
{
    public function boot(): void
    {
        $this->loadMigrations('Registration');
    }
}
