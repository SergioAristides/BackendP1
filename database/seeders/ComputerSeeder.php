<?php

namespace Database\Seeders;
use App\Models\Computer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComputerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Computer::unguard();
        Computer::create([
            'name' => 'sle1',
            'brand' => 'Asus',
            'ram' => 16,
            'cpu' => 'intel i5',
            'owner' => 1
        ]);
        Computer::create([
            'name' => 'sle2',
            'brand' => 'Lenovo',
            'ram' => 8,
            'cpu' => 'intel i3',
            'owner' => 1
        ]);
        Computer::create([
            'name' => 'sle3',
            'brand' => 'Asus',
            'ram' => 16,
            'cpu' => 'ryzen',
            'owner' => 1
        ]);
        Computer::reguard();
    }
}
