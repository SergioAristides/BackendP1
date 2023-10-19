<?php

namespace Database\Seeders;

use App\Models\Observation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ObservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Observation::unguard();
        Observation::create([
            'message' => 'message--- enviando 1',
            'computer' => 1,
            'category' => 1,
            'owner' => 1
        ]);
        Observation::create([
            'message' => 'message--- enviando 2',
            'computer' => 2,
            'category' => 1,
            'owner' => 1
        ]);
        Observation::create([
            'message' => 'message--- enviando 3',
            'computer' => 3,
            'category' => 1,
            'owner' => 1
        ]);


        Observation::reguard();
    }
    }

