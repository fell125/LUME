<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
        	'name' => 'LUME ADMIN',
        	'email' => 'lume@lume.com',
        	'password' => bcrypt('azsxdc')
        ]);
    }
}
