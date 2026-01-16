<?php

namespace App\Modules\Person\Infrastructure\Providers;

use Illuminate\Support\ServiceProvider;

class PersonServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadMigrationsFrom(app_path('Modules/Person/Infrastructure/Persistence/Migrations'));
    }
}
