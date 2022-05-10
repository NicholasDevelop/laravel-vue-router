<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\support\Facades\Hash;
use Faker\Generator as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
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
        
        for ($i=0; $i < 10; $i++) { 
            User::create([
                'name' => $faker->name(),
                'email' => $faker->unique()->email(),
                'password' => Hash::make($faker->password()),
            ]);
        }
    }
}
