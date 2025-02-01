<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        $adminRole = Role::where('name', 'admin')->first();

        User::create([
            'name' => 'Administrator',
            'email' => 'abdussalam.abdul@gmail.com',
            'password' => Hash::make('12345678'), // Change to a secure password
            'role_id' => $adminRole->id,
        ]);
    }
}
