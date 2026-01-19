<?php

namespace App\Modules\Person\Infrastructure\Providers;

use App\Shared\Infrastructure\Providers\ModuleServiceProvider;

class MigrationsServiceProvider extends ModuleServiceProvider
{
    public function boot(): void
    {
        $this->loadMigrations('Person');
    }
}
