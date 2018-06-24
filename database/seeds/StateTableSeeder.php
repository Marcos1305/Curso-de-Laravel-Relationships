<?php

use Illuminate\Database\Seeder;

class StateTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * 'country_id' => '1',
     * @return void
     */
    public function run()
    {


        \DB::table('states')->delete();

        \DB::table('states')->insert(array (
            0 =>
            array (
                'country_id' => '1',
                'id' => '1',
                'name' => 'Acre',
                'initials' => 'AC',
            ),
            1 =>
            array (
                'country_id' => '1',
                'id' => '2',
                'name' => 'Alagoas',
                'initials' => 'AL',
            ),
            2 =>
            array (
                'country_id' => '1',
                'id' => '3',
                'name' => 'Amazonas',
                'initials' => 'AM',
            ),
            3 =>
            array (
                'country_id' => '1',
                'id' => '4',
                'name' => 'Amapá',
                'initials' => 'AP',
            ),
            4 =>
            array (
                'country_id' => '1',
                'id' => '5',
                'name' => 'Bahia',
                'initials' => 'BA',
            ),
            5 =>
            array (
                'country_id' => '1',
                'id' => '6',
                'name' => 'Ceará',
                'initials' => 'CE',
            ),
            6 =>
            array (
                'country_id' => '1',
                'id' => '7',
                'name' => 'Distrito Federal',
                'initials' => 'DF',
            ),
            7 =>
            array (
                'country_id' => '1',
                'id' => '8',
                'name' => 'Espírito Santo',
                'initials' => 'ES',
            ),
            8 =>
            array (
                'country_id' => '1',
                'id' => '9',
                'name' => 'Goiás',
                'initials' => 'GO',
            ),
            9 =>
            array (
                'country_id' => '1',
                'id' => '10',
                'name' => 'Maranhão',
                'initials' => 'MA',
            ),
            10 =>
            array (
                'country_id' => '1',
                'id' => '11',
                'name' => 'Minas Gerais',
                'initials' => 'MG',
            ),
            11 =>
            array (
                'country_id' => '1',
                'id' => '12',
                'name' => 'Mato Grosso do Sul',
                'initials' => 'MS',
            ),
            12 =>
            array (
                'country_id' => '1',
                'id' => '13',
                'name' => 'Mato Grosso',
                'initials' => 'MT',
            ),
            13 =>
            array (
                'country_id' => '1',
                'id' => '14',
                'name' => 'Pará',
                'initials' => 'PA',
            ),
            14 =>
            array (
                'country_id' => '1',
                'id' => '15',
                'name' => 'Paraiba',
                'initials' => 'PB',
            ),
            15 =>
            array (
                'country_id' => '1',
                'id' => '16',
                'name' => 'Pernambuco',
                'initials' => 'PE',
            ),
            16 =>
            array (
                'country_id' => '1',
                'id' => '17',
                'name' => 'Piauí',
                'initials' => 'PI',
            ),
            17 =>
            array (
                'country_id' => '1',
                'id' => '18',
                'name' => 'Paraná',
                'initials' => 'PR',
            ),
            18 =>
            array (
                'country_id' => '1',
                'id' => '19',
                'name' => 'Rio de Janeiro',
                'initials' => 'RJ',
            ),
            19 =>
            array (
                'country_id' => '1',
                'id' => '20',
                'name' => 'Rio Grande do Norte',
                'initials' => 'RN',
            ),
            20 =>
            array (
                'country_id' => '1',
                'id' => '21',
                'name' => 'Rondônia',
                'initials' => 'RO',
            ),
            21 =>
            array (
                'country_id' => '1',
                'id' => '22',
                'name' => 'Roraima',
                'initials' => 'RR',
            ),
            22 =>
            array (
                'country_id' => '1',
                'id' => '23',
                'name' => 'Rio Grande do Sul',
                'initials' => 'RS',
            ),
            23 =>
            array (
                'country_id' => '1',
                'id' => '24',
                'name' => 'Santa Catarina',
                'initials' => 'SC',
            ),
            24 =>
            array (
                'country_id' => '1',
                'id' => '25',
                'name' => 'Sergipe',
                'initials' => 'SE',
            ),
            25 =>
            array (
                'country_id' => '1',
                'id' => '26',
                'name' => 'São Paulo',
                'initials' => 'SP',
            ),
            26 =>
            array (
                'country_id' => '1',
                'id' => '27',
                'name' => 'Tocantins',
                'initials' => 'TO',
            ),
        ));


    }
}
