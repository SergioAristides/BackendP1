<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::unguard();
        User::create([
            'name' => 'Sergio',
            'email' => 'Sergio@auotnoma.edu.co',
            'password' => 'hola123'
        ]);
        User::create([
            'name' => 'camilo',
            'email' => 'camilo@auotnoma.edu.co',
            'password' => 'hola122'
        ]);
        User::reguard();
    }
}
