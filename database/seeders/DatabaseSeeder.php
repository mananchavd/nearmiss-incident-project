<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\IncidentCategory;
use App\Models\IncidentType;
use App\Models\Location;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        for($i=1;$i<10;$i++){

            IncidentCategory::create([
                'category'      =>      'Category '.$i,
            ]);

            IncidentType::create([
                'type'      =>      'Type '.$i,
            ]);

            Location::create([
                'location'      =>      'Location '.$i,
            ]);

        }

    }
}
