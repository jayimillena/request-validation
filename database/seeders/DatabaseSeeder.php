<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::insert([
                [
                    'name' => 'Jay Millena',
                    'email' => 'jay.millena07@gmail.com',
                    'email_verified_at' => now(),
                    'password' => Hash::make('Gigatt381676183`'),
                    'usertype' => 'admin',
                    'remember_token' => Str::random(10),
                ],
                [
                    'name' => 'Mark Binamira',
                    'email' => 'mark.binamira08@gmail.com',
                    'email_verified_at' => now(),
                    'password' => Hash::make('Gigatt381676183`'),
                    'usertype' => 'library',
                    'remember_token' => Str::random(10),
                ],
                [
                    'name' => 'Justin Francis Macasinag',
                    'email' => 'justin.macasinag09@gmail.com',
                    'email_verified_at' => now(),
                    'password' => Hash::make('Gigatt381676183`'),
                    'usertype' => 'faculty',
                    'remember_token' => Str::random(10),
                ],
                [
                    'name' => 'Arnel Fuentes',
                    'email' => 'arnel.fuentes03@gmail.com',
                    'email_verified_at' => now(),
                    'password' => Hash::make('Gigatt381676183`'),
                    'usertype' => 'student',
                    'remember_token' => Str::random(10),
                ],
                [
                    'name' => 'Anonymous',
                    'email' => 'anonymous01@gmail.com',
                    'email_verified_at' => now(),
                    'password' => Hash::make('Gigatt381676183`'),
                    'usertype' => 'guest',
                    'remember_token' => Str::random(10),
                ],
            ]);
        }
}
