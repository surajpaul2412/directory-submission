<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('packages')->insert([
        	'name' => 'FREE Listing',
        	'price' => '0',
        	'sponsered' => '0',
        ]);
    }
}
