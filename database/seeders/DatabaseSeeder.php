<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Profile::insert([
            [
                'name' => 'Admin User',
                'description' => 'Usuário com todos os privilégios de gerenciamento'
            ],
            [
                'name' => 'Client User',
                'email' => 'Usuário com privilégios comuns',
            ]
        ]);

        User::insert([
            [
                'name' => 'Administrador Master',
                'email' => 'admin@mail.com',
                'password' => Hash::make('1234admin'),
                'profile_id' => Profile::where('name', 'Admin User')->first()->id

            ],
            [
                'name' => 'João',
                'email' => 'joao@mailcom',
                'password' => Hash::make('1234'),
                'profile_id' => Profile::where('name', 'Client User')->first()->id
            ]
        ]);
    }
}
