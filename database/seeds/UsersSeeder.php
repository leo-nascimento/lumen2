<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert user Admin
        \App\User::create([
            'name' => 'admin',
            'email' => 'admin@lumen.com',
            'password' => 123456
        ]);
    }
}
