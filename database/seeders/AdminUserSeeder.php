<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@wepadbol.com'],
            [
                'name' => 'pentagoAdmin',
                'password' => Hash::make('wepadbol*12*34*67'), // change to a secure password!
                //'is_admin' => true, // optional if you add is_admin column
            ]
        );
    }
}
