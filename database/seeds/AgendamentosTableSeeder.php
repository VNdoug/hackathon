<?php

use Illuminate\Database\Seeder;

class AgendamentosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $agendamentos = DB::table('agendamentos');

        if (!$agendamentos->count()) {
            $agendamentos->insert([
                'paciente_id'       => 4,
                'medico_id'       => 2,
                'data_pre_agendamento'     => '2018-09-30 09:00',
                'sintomas'    => 'teste de agendamento',
            ]);

        }
    }
}
