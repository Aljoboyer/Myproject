<?php

use Illuminate\Database\Seeder;
use DB;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([

        	'name' => str::random(10),
        	'email' => str::random(10).'@gmail.com',
        	'password' => bcrypt('password'),



        ]);
    }
}
