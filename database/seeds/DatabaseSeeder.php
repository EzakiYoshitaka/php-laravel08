<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        
    User::create([
    'name' => '森本',
    'email' => 'morimoto@tech.com',
    'password' => Hash::make("pass"),
    ]);
    }
}
