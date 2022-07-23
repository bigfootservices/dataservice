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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->integer('report_id')->nullable()->default(null);
            $table->string('year')->nullable()->default(null);
            $table->string('season')->nullable()->default(null);
            $table->string('month')->nullable()->default(null);
            $table->string('date')->nullable()->default(null);
            $table->string('state')->nullable()->default(null);
            $table->string('county')->nullable()->default(null);
            $table->text('location_details')->nullable()->default(null);
            $table->string('nearest_town')->nullable()->default(null);
            $table->string('nearest_road')->nullable()->default(null);
            $table->text('observed')->nullable()->default(null);
            $table->text('also_noticed')->nullable()->default(null);
            $table->text('other_witnesses')->nullable()->default(null);
            $table->text('other_stories')->nullable()->default(null);
            $table->text('time_and_conditions')->nullable()->default(null);
            $table->text('environment')->nullable()->default(null);
            $table->string('report_class')->nullable()->default(null);
            $table->string('a_and_g_references')->nullable()->default(null);
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
        Schema::dropIfExists('reports');
    }
};
