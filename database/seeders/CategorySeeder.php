<?php

namespace Database\Seeders;
use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Category::unguard();
        Category::create([
            'type' => 'software instalation',

        ]);
        Category::create([
            'type' => 'preventive maintenance',

        ]);
        Category::create([
            'type' => 'corrective maintenance',

        ]);
        Category::create([
            'type' => 'hardware change',
        ]);
        Category::reguard();
    }
}
