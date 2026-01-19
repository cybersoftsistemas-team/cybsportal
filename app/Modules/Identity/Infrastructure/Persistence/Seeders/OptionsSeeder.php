<?php

namespace App\Modules\Identity\Infrastructure\Persistence\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OptionsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::transaction(function () {
            RegisterIdentitiesSeeder::saveOptionIfNotExists(
                '5A6F0A6E-5C6A-4E71-9E6A-5C9E3F9A3A01',
                'O usuário deve alterar a senha no próximo logon',
                'Força um usuário a alterar a senha na próxima vez que fizer logon na rede. ' .
                'Use esta opção quando deseja garantir que o usuário será a única pessoa a ' .
                'conhecer a senha.'
            );

            RegisterIdentitiesSeeder::saveOptionIfNotExists(
                'C9F8E3E2-6D8E-4E53-9C8D-9F9F7B2A4E02',
                'O usuário não pode alterar a senha',
                'Impede que os usuários alterem suas senhas. Use esta opção quando desejar ' .
                'manter o controle sobre uma conta de usuário, como uma conta de convidado ' .
                'ou temporária.'
            );

            RegisterIdentitiesSeeder::saveOptionIfNotExists(
                '2D7F9B4C-9F42-4A38-9F71-4E8F4B9D8C03',
                'A senha nunca expira',
                'Impede que uma senha do usuário expire. É recomendável que as contas de ' .
                'Serviço tenham esta opção habilitada e usem senhas de alto nível.'
            );

            RegisterIdentitiesSeeder::saveOptionIfNotExists(
                '8E1A3D5B-7C5F-4F5B-BE2C-1F3A9E6D4A04',
                'Conta desabilitada',
                'Impede que um usuário faça logon com a conta selecionada. Muitos ' .
                'administradores usam contas desabilitadas como modelos para contas de ' .
                'usuário comuns.'
            );
        });
    }
}
