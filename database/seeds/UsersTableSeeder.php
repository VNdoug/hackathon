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
                'name'     => 'Médico',
                'crm'     => '1234',
                'especializacao_id'     => 1,
                'email'    => 'medico@example.com',
                'password' => bcrypt('1')
            ]);

            $users->insert([
                'id'       => 3,
                'name'     => 'Atendente',
                'email'    => 'atendente@example.com',
                'password' => bcrypt('1')
            ]);

            $users->insert([
                'id'       => 4,
                'name'     => 'Paciente',
                'email'    => 'paciente@example.com',
                'password' => bcrypt('1')
            ]);


        }
    }
}
