<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'name' => 'admin',
            'email' => 'admin@test.com',
            'password' => Hash::make('desarrollo')
        ]);

        User::insert([
            'name' => 'user',
            'email' => 'user@test.com',
            'password' => Hash::make('desarrollo')
        ]);
    }
}
