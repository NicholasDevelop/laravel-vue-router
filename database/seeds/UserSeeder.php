<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::create([
        //     'name' => 'Nicholas',
        //     'email' => 'ciao@gmail.com',
        //     'password' => Hash::make('prova123'),
        // ]);
        $user = new User();
        $user->name = 'Nicholas';
        $user->email = 'ciao@gmail.com';
        $user->password = Hash::make('prova123');

        $user->save();
        
    }
}
