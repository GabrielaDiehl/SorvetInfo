<?php

use Illuminate\Database\Seeder;
use App\User;

class userTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name' => 'tiago',
        	'email' => 'tiago@tiago.com',
        	'password' => '12345678'
       	]);
    }
}
