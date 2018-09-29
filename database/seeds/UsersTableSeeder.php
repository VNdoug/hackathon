<?php

use Illuminate\Database\Seeder;
// use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = DB::table('users');
        
        if (!$users->count()) {
            $users->insert([
                'id'       => 1,
                'name'     => 'Administrador',
                'email'    => 'admin@example.com',
                'password' => bcrypt('1')
            ]);

            $users->insert([
                'id'       => 2,
                'name'     => 'Médico 1',
                'crm'     => '1234',
                'especializacao_id'     => 1,
                'email'    => 'medico@example.com',
                'password' => bcrypt('1')
            ]);

            $users->insert([
                'id'       => 3,
                'name'     => 'Médico 2',
                'crm'     => '4321',
                'especializacao_id'     => 2,
                'email'    => 'medico2@example.com',
                'password' => bcrypt('1')
            ]);

            $users->insert([
                'id'       => 4,
                'name'     => 'Médico 3',
                'crm'     => '1234',
                'especializacao_id'     => 3,
                'email'    => 'medico3@example.com',
                'password' => bcrypt('1')
            ]);

            $users->insert([
                'id'       => 5,
                'name'     => 'Médico 4',
                'crm'     => '1234',
                'especializacao_id'     => 3,
                'email'    => 'medico4@example.com',
                'password' => bcrypt('1')
            ]);

            $users->insert([
                'id'       => 6,
                'name'     => 'Atendente',
                'email'    => 'atendente@example.com',
                'password' => bcrypt('1')
            ]);

            for ($i = 7; $i <= 100 ; $i++) { 
                $users->insert([
                    'id'       => $i,
                    'name'     => "Paciente $i",
                    'email'    => "paciente$i@example.com",
                    'password' => bcrypt('1')
                ]);
            }
            


        }
    }
}
