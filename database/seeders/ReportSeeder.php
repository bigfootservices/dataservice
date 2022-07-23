<?php

namespace Database\Seeders;

use App\Models\Report;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/seeders/SeedData/reports.json");
        $reports = json_decode($json);

        foreach ($reports as $key => $value) {
            Report::create([
                "report_id" => $value->report_id ?? null,
                "year" => $value->year ?? null,
                "season" => $value->season ?? null,
                "month" => $value->month ?? null,
                "date" => $value->date ?? null,
                "state" => $value->state ?? null,
                "county" => $value->county ?? null,
                "location_details" => $value->location_details ?? null,
                "nearest_town" =>  $value->nearest_town ?? null,
                "nearest_road" => $value->nearest_road ?? null,
                "observed" => $value->observed ?? null,
                "also_noticed" => $value->also_noticed ?? null,
                "other_witnesses" => $value->other_witnesses ?? null,
                "other_stories" => $value->other_stories ?? null,
                "time_and_conditions" =>  $value->time_and_conditions ?? null,
                "environment" => $value->environment ?? null,
                "report_class" => $value->report_class ?? null,
                "a_and_g_references" =>  $value->a_and_g_references ?? null,
            ]);
        }
    }
}
