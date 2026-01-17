<?php

namespace App\Modules\General\Infrastructure\Providers;

use App\Shared\Providers\ModuleServiceProvider;

class MigrationsServiceProvider extends ModuleServiceProvider
{
    public function boot(): void
    {
        $this->loadMigrations('General');
    }
}
