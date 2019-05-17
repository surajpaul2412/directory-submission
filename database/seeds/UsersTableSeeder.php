<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'role_id' => '1',
        	'name' => 'admin',
        	'email' => 'admin@gmail.com',
        	'password' => bcrypt('test123456'),
        ]);

        DB::table('users')->insert([
        	'role_id' => '2',
        	'name' => 'verifier',
        	'email' => 'verifier@gmail.com',
        	'password' => bcrypt('test123456'),
        ]);
    }
}
