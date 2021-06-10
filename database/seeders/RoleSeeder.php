<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'admin'
        ]);

        Role::create([
            'name' => 'user'
        ]);

        $admin = User::whereId(1)->first();
        $admin->assignRole('admin');

        $user = User::whereId(2)->first();
        $user->assignRole('user');

    }
}
