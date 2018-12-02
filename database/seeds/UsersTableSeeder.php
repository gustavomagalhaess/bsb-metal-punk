<?php

use Illuminate\Database\Seeder;
use Laraspace\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'email' => 'gustavo.magalhaess@gmail.com',
            'name' => 'Gustavo Magalhães',
            'role' => 'admin',
            'password' => bcrypt('admin')
        ]);
    }
}
