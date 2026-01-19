<?php

namespace App\Modules\Address\Infrastructure\Persistence\Seeders;

use App\Modules\Address\Infrastructure\Persistence\Seeders\RegisterAddressesSeeder;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrazilStatesSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::transaction(function () {
            // Get Country ID
            $countryId = app('seed.countryId');

            // Acre
            $state = RegisterAddressesSeeder::saveState(
                       id: '027BDBC1-FD38-4B6C-9719-CF091D7FE525',
                     name: 'Acre',
                  acronym: 'AC',
                countryId: $countryId,
            );

            // State Codes
            RegisterAddressesSeeder::saveStateCodeIfNotExists(
                     ibge: '12',
                     iso2: 'AC',
                iso3166_2: 'BR-AC',
                  stateId: $state->id(),
            );

            // Alagoas
            $state = RegisterAddressesSeeder::saveState(
                       id: '61C0F741-EF24-4FE6-9F6A-28077DD38D57',
                     name: 'Alagoas',
                  acronym: 'AL',
                countryId: $countryId,
            );

            // State Codes
            RegisterAddressesSeeder::saveStateCodeIfNotExists(
                     ibge: '27',
                     iso2: 'AL',
                iso3166_2: 'BR-AL',
                  stateId: $state->id(),
            );

            // Amapá
            $state = RegisterAddressesSeeder::saveState(
                       id: '7FC60281-441F-4179-ACFB-193D59DEDA13',
                     name: 'Amapá',
                  acronym: 'AP',
                countryId: $countryId,
            );

            // State Codes
            RegisterAddressesSeeder::saveStateCodeIfNotExists(
                     ibge: '16',
                     iso2: 'AP',
                iso3166_2: 'BR-AP',
                  stateId: $state->id(),
            );

            // Amazonas
            $state = RegisterAddressesSeeder::saveState(
                       id: 'FF0B3851-BBF9-4D9B-8635-161A7EE675C8',
                     name: 'Amazonas',
                  acronym: 'AM',
                countryId: $countryId,
            );

            // State Codes
            RegisterAddressesSeeder::saveStateCodeIfNotExists(
                     ibge: '13',
                     iso2: 'AM',
                iso3166_2: 'BR-AM',
                  stateId: $state->id(),
            );

            // Bahia
            $state = RegisterAddressesSeeder::saveState(
                       id: 'FC93A8A7-B4BD-4FB3-B80C-405D6426F4C8',
                     name: 'Bahia',
                  acronym: 'BA',
                countryId: $countryId,
            );

            // State Codes
            RegisterAddressesSeeder::saveStateCodeIfNotExists(
                     ibge: '29',
                     iso2: 'BA',
                iso3166_2: 'BR-BA',
                  stateId: $state->id(),
            );

            // Ceará
            $state = RegisterAddressesSeeder::saveState(
                       id: '8A75E8B0-19CC-4599-B398-A212311DF58F',
                     name: 'Ceará',
                  acronym: 'CE',
                countryId: $countryId,
            );

            // State Codes
            RegisterAddressesSeeder::saveStateCodeIfNotExists(
                     ibge: '23',
                     iso2: 'CE',
                iso3166_2: 'BR-CE',
                  stateId: $state->id(),
            );

            // Distrito Federal
            $state = RegisterAddressesSeeder::saveState(
                       id: 'B4BFAC77-05D5-4C24-A1F4-3D0B961705DB',
                     name: 'Distrito Federal',
                  acronym: 'DF',
                countryId: $countryId,
            );

            // State Codes
            RegisterAddressesSeeder::saveStateCodeIfNotExists(
                     ibge: '53',
                     iso2: 'DF',
                iso3166_2: 'BR-DF',
                  stateId: $state->id(),
            );

            // Espírito Santo
            $state = RegisterAddressesSeeder::saveState(
                       id: '351F4380-C4C5-446B-ADC2-0D2221CA2A7C',
                     name: 'Espírito Santo',
                  acronym: 'ES',
                countryId: $countryId,
            );

            // State Codes
            RegisterAddressesSeeder::saveStateCodeIfNotExists(
                     ibge: '32',
                     iso2: 'ES',
                iso3166_2: 'BR-ES',
                  stateId: $state->id(),
            );

            // Goiás
            $state = RegisterAddressesSeeder::saveState(
                       id: '7E2E26B8-D614-4C24-9851-8A86EAFA002B',
                     name: 'Goiás',
                  acronym: 'GO',
                countryId: $countryId,
            );

            // State Codes
            RegisterAddressesSeeder::saveStateCodeIfNotExists(
                     ibge: '52',
                     iso2: 'GO',
                iso3166_2: 'BR-GO',
                  stateId: $state->id(),
            );

            // Maranhão
            $state = RegisterAddressesSeeder::saveState(
                       id: '1D72046A-434C-476E-8261-2505A8965DE6',
                     name: 'Maranhão',
                  acronym: 'MA',
                countryId: $countryId,
            );

            // State Codes
            RegisterAddressesSeeder::saveStateCodeIfNotExists(
                     ibge: '21',
                     iso2: 'MA',
                iso3166_2: 'BR-MA',
                  stateId: $state->id(),
            );

            // Mato Grosso
            $state = RegisterAddressesSeeder::saveState(
                       id: '214F9A32-E141-4F20-9A76-F9B9F619ACA8',
                     name: 'Mato Grosso',
                  acronym: 'MT',
                countryId: $countryId,
            );

            // State Codes
            RegisterAddressesSeeder::saveStateCodeIfNotExists(
                     ibge: '51',
                     iso2: 'MT',
                iso3166_2: 'BR-MT',
                  stateId: $state->id(),
            );

            // Mato Grosso do Sul
            $state = RegisterAddressesSeeder::saveState(
                       id: '9432CFA4-8C63-4E19-93B6-40A63DAD170B',
                     name: 'Mato Grosso do Sul',
                  acronym: 'MS',
                countryId: $countryId,
            );

            // State Codes
            RegisterAddressesSeeder::saveStateCodeIfNotExists(
                     ibge: '50',
                     iso2: 'MS',
                iso3166_2: 'BR-MS',
                  stateId: $state->id(),
            );

            // Minas Gerais
            $state = RegisterAddressesSeeder::saveState(
                       id: '390E195C-EBE5-4D5C-9807-C9714FCDBCF9',
                     name: 'Minas Gerais',
                  acronym: 'MG',
                countryId: $countryId,
            );

            // State Codes
            RegisterAddressesSeeder::saveStateCodeIfNotExists(
                     ibge: '31',
                     iso2: 'MG',
                iso3166_2: 'BR-MG',
                  stateId: $state->id(),
            );

            // Pará
            $state = RegisterAddressesSeeder::saveState(
                       id: 'C88B2EC5-1B9B-4021-90A9-72A4C69D6A0C',
                     name: 'Pará',
                  acronym: 'PA',
                countryId: $countryId,
            );

            // State Codes
            RegisterAddressesSeeder::saveStateCodeIfNotExists(
                     ibge: '15',
                     iso2: 'PA',
                iso3166_2: 'BR-PA',
                  stateId: $state->id(),
            );

            // Paraíba
            $state = RegisterAddressesSeeder::saveState(
                       id: '9617CF0D-BA72-4F66-AECB-0D08FC1A8EE0',
                     name: 'Paraíba',
                  acronym: 'PB',
                countryId: $countryId,
            );

            // State Codes
            RegisterAddressesSeeder::saveStateCodeIfNotExists(
                     ibge: '25',
                     iso2: 'PB',
                iso3166_2: 'BR-PB',
                  stateId: $state->id(),
            );

            // Paraná
            $state = RegisterAddressesSeeder::saveState(
                       id: '6DBE5DC2-2F24-43FD-A605-20F1996F1FD9',
                     name: 'Paraná',
                  acronym: 'PR',
                countryId: $countryId,
            );

            // State Codes
            RegisterAddressesSeeder::saveStateCodeIfNotExists(
                     ibge: '41',
                     iso2: 'PR',
                iso3166_2: 'BR-PR',
                  stateId: $state->id(),
            );

            // Pernambuco
            $state = RegisterAddressesSeeder::saveState(
                       id: 'B3F31C28-126C-42FC-822E-92538566F6D1',
                     name: 'Pernambuco',
                  acronym: 'PE',
                countryId: $countryId,
            );

            // State Codes
            RegisterAddressesSeeder::saveStateCodeIfNotExists(
                     ibge: '26',
                     iso2: 'PE',
                iso3166_2: 'BR-PE',
                  stateId: $state->id(),
            );

            // Piauí
            $state = RegisterAddressesSeeder::saveState(
                       id: 'A260AFF5-463E-4742-B54E-9D0A84FB090B',
                     name: 'Piauí',
                  acronym: 'PI',
                countryId: $countryId,
            );

            // State Codes
            RegisterAddressesSeeder::saveStateCodeIfNotExists(
                     ibge: '22',
                     iso2: 'PI',
                iso3166_2: 'BR-PI',
                  stateId: $state->id(),
            );

            // Rio de Janeiro
            $state = RegisterAddressesSeeder::saveState(
                       id: '7AC9378C-D910-4EAE-ACD7-14CDBB5F2D18',
                     name: 'Rio de Janeiro',
                  acronym: 'RJ',
                countryId: $countryId,
            );

            // State Codes
            RegisterAddressesSeeder::saveStateCodeIfNotExists(
                     ibge: '33',
                     iso2: 'RJ',
                iso3166_2: 'BR-RJ',
                  stateId: $state->id(),
            );

            //
            $state = RegisterAddressesSeeder::saveState(
                       id: '25D7D2D4-34A9-497C-890D-C4FA39FCE649',
                     name: 'Rio Grande do Norte',
                  acronym: 'RN',
                countryId: $countryId,
            );

            // State Codes
            RegisterAddressesSeeder::saveStateCodeIfNotExists(
                     ibge: '24',
                     iso2: 'RN',
                iso3166_2: 'BR-RN',
                  stateId: $state->id(),
            );

            // Rio Grande do Sul
            $state = RegisterAddressesSeeder::saveState(
                       id: 'FE681649-A274-4964-97C6-051D92AACD1A',
                     name: 'Rio Grande do Sul',
                  acronym: 'RS',
                countryId: $countryId,
            );

            // State Codes
            RegisterAddressesSeeder::saveStateCodeIfNotExists(
                     ibge: '43',
                     iso2: 'RS',
                iso3166_2: 'BR-RS',
                  stateId: $state->id(),
            );

            // Rondônia
            $state = RegisterAddressesSeeder::saveState(
                       id: 'AD552566-7990-44C9-BDD0-5A2ABE43CDAD',
                     name: 'Rondônia',
                  acronym: 'RO',
                countryId: $countryId,
            );

            // State Codes
            RegisterAddressesSeeder::saveStateCodeIfNotExists(
                     ibge: '11',
                     iso2: 'RO',
                iso3166_2: 'BR-RO',
                  stateId: $state->id(),
            );

            // Roraima
            $state = RegisterAddressesSeeder::saveState(
                       id: '97BF1F13-EBD6-4845-9BFE-D29A002F0859',
                     name: 'Roraima',
                  acronym: 'RR',
                countryId: $countryId,
            );

            // State Codes
            RegisterAddressesSeeder::saveStateCodeIfNotExists(
                     ibge: '14',
                     iso2: 'RR',
                iso3166_2: 'BR-RR',
                  stateId: $state->id(),
            );

            // Santa Catarina
            $state = RegisterAddressesSeeder::saveState(
                       id: 'CDE7D719-E337-4C00-BDF1-F1D8E4064833',
                     name: 'Santa Catarina',
                  acronym: 'SC',
                countryId: $countryId,
            );

            // State Codes
            RegisterAddressesSeeder::saveStateCodeIfNotExists(
                     ibge: '42',
                     iso2: 'SC',
                iso3166_2: 'BR-SC',
                  stateId: $state->id(),
            );

            // São Paulo
            $state = RegisterAddressesSeeder::saveState(
                       id: 'DD1F3F87-7442-42C2-ABC0-DC0C01303E0C',
                     name: 'São Paulo',
                  acronym: 'SP',
                countryId: $countryId,
            );

            // State Codes
            RegisterAddressesSeeder::saveStateCodeIfNotExists(
                     ibge: '35',
                     iso2: 'SP',
                iso3166_2: 'BR-SP',
                  stateId: $state->id(),
            );

            // Sergipe
            $state = RegisterAddressesSeeder::saveState(
                       id: 'A6ACF38D-C202-4E82-8B8E-CB914253AE7A',
                     name: 'Sergipe',
                  acronym: 'SE',
                countryId: $countryId,
            );

            // State Codes
            RegisterAddressesSeeder::saveStateCodeIfNotExists(
                     ibge: '28',
                     iso2: 'SE',
                iso3166_2: 'BR-SE',
                  stateId: $state->id(),
            );

            // Tocantins
            $state = RegisterAddressesSeeder::saveState(
                       id: '97B48D75-E208-4C35-A612-3300575A5AE1',
                     name: 'Tocantins',
                  acronym: 'TO',
                countryId: $countryId,
            );

            // State Codes
            RegisterAddressesSeeder::saveStateCodeIfNotExists(
                     ibge: '17',
                     iso2: 'TO',
                iso3166_2: 'BR-TO',
                  stateId: $state->id(),
            );
        });
    }
}
