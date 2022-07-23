<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/seeders/SeedData/locations.json");
        $locations = json_decode($json);

        foreach ($locations as $key => $value) {
            Location::create([
                "report_id" => $value->report_id ?? null,
                "latitude" => $value->latitude ?? null,
                "longitude" => $value->longitude ?? null,
            ]);
        }
    }
}
