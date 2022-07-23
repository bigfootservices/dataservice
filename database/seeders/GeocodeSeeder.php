<?php

namespace Database\Seeders;

use App\Models\Geocode;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class GeocodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/seeders/SeedData/geocodes.json");
        $geocodes = json_decode($json);

        foreach ($geocodes as $key => $value) {
            Geocode::create([
                "report_id" => $value->report_id ?? null,
                "latitude" => $value->latitude ?? null,
                "longitude" => $value->longitude ?? null,
                "geohash" => $value->geohash ?? null,
                "temperature_high" => $value->temperature_high ?? null,
                "temperature_mid" => $value->temperature_mid ?? null,
                "temperature_low" => $value->temperature_low ?? null,
                "dew_point" => $value->dew_point ?? null,
                "humiity" => $value->humidity ?? null,
                "cloud_cover" => $value->cloud_cover ?? null,
                "moon_phase" => $value->moon_phase ?? null,
                "precip_intensity" => $value->intensity ?? null,
                "precip_probability" => $value->precip_probability ?? null,
                "precip_type" => $value->precip_type ?? null,
                "pressure" => $value->pressure ?? null,
                "summary" => $value->summary ?? null,
                "uv_index" => $value->uv_index ?? null,
                "visibility" => $value->visibility ?? null,
                "wind_bearing" => $value->wind_bearing ?? null,
                "wind_speed" => $value->wind_speed ?? null,
            ]);
        }
    }
}
