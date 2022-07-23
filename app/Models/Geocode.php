<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property int $report_id
 * @property float $latitude
 * @property float $longitude
 * @property string $geohash
 * @property float $temperature_high
 * @property float $temperature_mid
 * @property float $temperature_low
 * @property float $dewPoint
 * @property float $humidity
 * @property float $cloud_cover
 * @property float $moon_phase
 * @property float $precip_intensity
 * @property float $precip_probability
 * @property string $precip_type
 * @property float $pressure
 * @property string $summary
 * @property int $uv_index
 * @property float $visibility
 * @property int $wind_bearing
 * @property float $wind_speed
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class Geocode extends Model
{
    use HasFactory;

    public function report(): BelongsTo
    {
        return $this->belongsTo(Report::class);
    }
}
