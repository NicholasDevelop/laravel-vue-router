<?php

use Illuminate\Database\Seeder;
use app\User;
use illuminate\support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Nicholas',
            'email' => 'ciao@gmail.com',
            'password' => Hash::make('prova123'),
        ]);
    }
}
