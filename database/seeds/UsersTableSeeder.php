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
        		'name' 	   => 'Administrador',
        		'email'    => 'admin@example.com',
        		'password' => bcrypt('1')
        	]);
        }
    }
}
