<?php

return [
    // Application Service Providers...
    App\Providers\AppServiceProvider::class,
    // Cybersoft Module Service Providers...
    App\Modules\Address\Infrastructure\Providers\AddressServiceProvider::class,
    App\Modules\Domain\Infrastructure\Providers\DomainServiceProvider::class,
    App\Modules\General\Infrastructure\Providers\GeneralServiceProvider::class,
    App\Modules\Identity\Infrastructure\Providers\IdentityServiceProvider::class,
    App\Modules\Person\Infrastructure\Providers\PersonServiceProvider::class,
    App\Modules\Registration\Infrastructure\Providers\RegistrationServiceProvider::class,
];
