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

            User::find(1)->syncRoles($role[1]);

            for ($i = 2; $i < 5 ; $i++) { 
                User::find($i)->syncRoles($role[2]);
            }

            User::find(6)->syncRoles($role[3]);
            
            /* role paciente nao está setado*/
    }
}
