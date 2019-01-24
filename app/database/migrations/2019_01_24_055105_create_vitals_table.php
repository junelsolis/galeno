<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVitalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vitals', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('patient_id');
            $table->unsignedInteger('provider_id');
            $table->unsignedInteger('encounter_id');
            $table->dateTime('date');
            $table->unsignedDecimal('celsius_temperature',3,1);
            $table->unsignedSmallInteger('pulse');
            $table->unsignedSmallInteger('respiratory_rate');
            $table->unsignedSmallInteger('systolic_pressure');
            $table->unsignedSmallInteger('diastolic_pressure');
            $table->timestamps();

            $table->foreign('patient_id')->references('id')->on('patients');
            $table->foreign('provider_id')->references('id')->on('users');
            $table->foreign('encounter_id')->references('id')->on('encounters');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vitals');
    }
}
