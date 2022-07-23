<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @property int $id
 * @property string $year
 * @property string $season
 * @property string $month
 * @property string $date
 * @property string $state
 * @property string $county
 * @property string $location_details
 * @property string $nearest_town
 * @property string $nearest_road
 * @property string $observed
 * @property string $also_noticed
 * @property string $other_witnesses
 * @property string $time_and_conditions
 * @property string $environment
 * @property string $report_class
 * @property string $a_and_g_references
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Report extends Model
{
    use HasFactory;

    public function location(): HasOne
    {
        return $this->hasOne(Location::class);
    }

    public function geocode(): HasOne
    {
        return $this->hasOne(Geocode::class);
    }
}
