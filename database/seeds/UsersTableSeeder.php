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
        DB::table('users')->truncate(); //for cleaning earlier data to avoid duplicate entries
	  	DB::table('users')->insert([
		    'name' => 'Admin',
		    'email' => 'admin@gmail.com',
		    'role' => 'admin',
		    'password' => Hash::make('password'),
		  ]);
  		DB::table('users')->insert([
		    'name' => 'Doctor',
		    'email' => 'doctor@gmail.com',
		    'role' => 'doctor',
		    'password' => Hash::make('password'),
		  ]);
  		DB::table('users')->insert([
		    'name' => 'Patient1',
		    'email' => 'patient1@gmail.com',
		    'role' => 'patient',
		    'password' => Hash::make('password'),
		]);
    }
}
