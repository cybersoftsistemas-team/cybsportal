<?php

namespace App\Modules\Identity\Infrastructure\Persistence\Seeders;

use App\Modules\Identity\Infrastructure\Persistence\DbContexts\OptionContext;
use App\Modules\Identity\Infrastructure\Persistence\DbContexts\UserContext;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::transaction(function () {
            $users = UserContext::query()->select('Id')->get();
            $options = OptionContext::query()->select('Id')->get();

            foreach ($users as $user) {
                foreach ($options as $option) {
                    RegisterIdentitiesSeeder::saveSettingIfNotExists(
                        $user->Id, $option->Id,
                        RegisterIdentitiesSeeder::getDefaultChecked($user->Id, $option->Id)
                    );
                }
            }
        });
    }
}
