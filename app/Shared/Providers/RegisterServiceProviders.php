<?php

namespace App\Shared\Providers;

use Illuminate\Support\ServiceProvider;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use SplFileInfo;

class RegisterServiceProviders extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $modulesPath = app_path('Modules');

        foreach (glob($modulesPath . '/*', GLOB_ONLYDIR) as $moduleDir) {
            $moduleName = basename($moduleDir);

            $providersDir = $moduleDir . '/Infrastructure/Providers';
            if (!is_dir($providersDir)) {
                continue;
            }

            // Lê recursivamente (caso você organize subpastas)
            $it = new RecursiveIteratorIterator(
                new RecursiveDirectoryIterator($providersDir, RecursiveDirectoryIterator::SKIP_DOTS)
            );

            /** @var SplFileInfo $file */
            foreach ($it as $file) {
                if (!$file->isFile() || $file->getExtension() !== 'php') {
                    continue;
                }

                // Ex.: .../Providers/Foo/BarServiceProvider.php -> Foo\BarServiceProvider
                $relative = str_replace($providersDir . DIRECTORY_SEPARATOR, '', $file->getPathname());
                $relative = str_replace(['/', '\\'], '\\', $relative);
                $classBase = preg_replace('/\.php$/', '', $relative);

                $fqcn = "App\\Modules\\{$moduleName}\\Infrastructure\\Providers\\{$classBase}";

                if (!class_exists($fqcn)) {
                    continue;
                }

                if (!is_subclass_of($fqcn, ServiceProvider::class)) {
                    continue;
                }

                $this->app->register($fqcn);
            }
        }
    }
}