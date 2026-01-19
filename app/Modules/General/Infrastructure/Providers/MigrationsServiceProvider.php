<?php

namespace App\Modules\General\Infrastructure\Providers;

use App\Shared\Infrastructure\Providers\ModuleServiceProvider;

class MigrationsServiceProvider extends ModuleServiceProvider
{
    public function boot(): void
    {
        $this->loadMigrations('General');
    }
}
