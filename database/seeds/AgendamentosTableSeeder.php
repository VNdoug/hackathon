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
            $dataAtual = now();

            for ($i=0; $i < 400; $i++) {
                $teste = mt_rand(0, 1);

                if ($teste == 1) {
                    $dataAleatoria = now()->subDays(mt_rand(1, 30))->subHours(rand(1, 7));
                } else {
                    $dataAleatoria = now()->addDays(mt_rand(1, 15))->subHours(rand(1, 7));
                }

                $data_pre_agendamento = $dataAleatoria->toDateString();
                $hora_pre_agendamento = $dataAleatoria->toTimeString();

                $agendamentos->insert([
                    'paciente_id'     => mt_rand(7, 100),
                    'medico_id'       => mt_rand(2, 5),
                    'data_pre_agendamento'     => $data_pre_agendamento,
                    'hora_pre_agendamento'     => $hora_pre_agendamento,
                    'sintomas'    => 'teste de agendamento',
                    'concluida' => $teste == 1 ? 1 : 0,
                    'confirmada' => $teste == 1 ? 1 : mt_rand(0, 1),
                ]);
            }
            

        }
    }
}
