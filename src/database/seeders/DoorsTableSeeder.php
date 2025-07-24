<?php

namespace Database\Seeders;

use App\Models\Door;
use Illuminate\Database\Seeder;

class DoorsTableSeeder extends Seeder
{
    public function run()
    {
        Door::truncate();

        $doors = [
            [
                'name' => 'Main Entrance',
                'location' => 'Front of building',
                'is_locked' => false,
                'description' => 'Primary access point'
            ],
            
            [
                'name' => 'Security Door',
                'location' => 'West wing',
                'is_locked' => true,
                'description' => 'Restricted access'
            ],
            
            [
                'name' => 'Back Exit',
                'location' => 'Rear of building',
                'is_locked' => false,
                'description' => 'Emergency exit only'
            ],
            
            [
                'name' => 'Storage Room',
                'location' => 'Basement',
                'is_locked' => true,
                'description' => 'Contains valuable items'
            ]
        ];

        foreach ($doors as $door) {
            Door::create($door);
        }

        Door::factory()->count(5)->create();
    }
}