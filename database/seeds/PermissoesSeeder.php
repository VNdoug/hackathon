<?php

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use App\User;

class PermissoesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $role[1] = Role::create(['name' => 'admin']);
            $role[2] = Role::create(['name' => 'medico']);
            $role[3] = Role::create(['name' => 'atendente']);
            $role[4] = Role::create(['name' => 'paciente']);

            for ($i = 1; $i <= 4 ; $i++) { 
                User::find($i)->syncRoles($role[$i]);
            }
        
    }
}
