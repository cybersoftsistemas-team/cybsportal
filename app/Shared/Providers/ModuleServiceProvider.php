<?php

namespace App\Shared\Providers;

use Illuminate\Support\ServiceProvider;

abstract class ModuleServiceProvider extends ServiceProvider
{
    private string $migrationsFromPath = 'Infrastructure/Persistence/Migrations';

    public function loadMigrations(string $moduleName): void
    {
        $migrationsFromPath = app_path('Modules/' . $moduleName . '/') . $this->migrationsFromPath;
        if ($migrationsFromPath) {
            $this->loadMigrationsFrom($migrationsFromPath);
        }
    }

    protected function setConfigMigrationsFromPath(string $fromPath): void
    {
        $this->migrationsFromPath = $fromPath;
    }
}
