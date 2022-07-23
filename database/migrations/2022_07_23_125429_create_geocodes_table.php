<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('geocodes', function (Blueprint $table) {
            $table->id();
            $table->integer('report_id')->nullable()->default(null);
            $table->float('latitude')->nullable()->default(null);
            $table->float('longitude')->nullable()->default(null);
            $table->string('geohash')->nullable()->default(null);
            $table->float('temperature_high')->nullable()->default(null);
            $table->float('temperature_mid')->nullable()->default(null);
            $table->float('temperature_low')->nullable()->default(null);
            $table->float('dew_point')->nullable()->default(null);
            $table->float('humidity')->nullable()->default(null);
            $table->float('cloud_cover')->nullable()->default(null);
            $table->float('moon_phase')->nullable()->default(null);
            $table->float('precip_intensity')->nullable()->default(null);
            $table->float('precip_probability')->nullable()->default(null);
            $table->string('precip_type')->nullable()->default(null);
            $table->float('pressure')->nullable()->default(null);
            $table->text('summary')->nullable()->default(null);
            $table->integer('uv_index')->nullable()->default(null);
            $table->float('visibility')->nullable()->default(null);
            $table->integer('wind_bearing')->nullable()->default(null);
            $table->float('wind_speed')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('geocodes');
    }
};
