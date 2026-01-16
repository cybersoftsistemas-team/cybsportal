<?php

namespace App\Modules\Domain\Infrastructure\Providers;

use Illuminate\Support\ServiceProvider;

class DomainServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadMigrationsFrom(app_path('Modules/Domain/Infrastructure/Persistence/Migrations'));
    }
}
