<?php

namespace App\Modules\General\Infrastructure\Providers;

use Illuminate\Support\ServiceProvider;

class GeneralServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadMigrationsFrom(app_path('Modules/General/Infrastructure/Persistence/Migrations'));
    }
}
