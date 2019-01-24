<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiagnosesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnoses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('icd_10_code')->nullable();
            $table->unsignedInteger('patient_id');
            $table->unsignedInteger('provider_id');
            $table->unsignedInteger('encounter_id');
            $table->boolean('active')->default(1);
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
        Schema::dropIfExists('diagnoses');
    }
}
