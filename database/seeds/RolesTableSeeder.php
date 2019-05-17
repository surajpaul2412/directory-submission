<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
        	'name' => 'Admin',
        ]);

        DB::table('roles')->insert([
        	'name' => 'Verifier',
        ]);

        DB::table('roles')->insert([
            'name' => 'normal_user',
        ]);
    }
}
