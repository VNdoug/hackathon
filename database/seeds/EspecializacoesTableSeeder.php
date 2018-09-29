<?php

use Illuminate\Database\Seeder;

class EspecializacoesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $especializacoes = DB::table('especializacao_medicos');

        if (!$especializacoes->count()) {
            $especializacoes->insert([
                'descricao'     => 'Pediatra',
            ]);

            $especializacoes->insert([
                'descricao'     => 'Clínica Geral',
            ]);

            $especializacoes->insert([
                'descricao'     => 'Dentista',
            ]);
        }
    }
}
