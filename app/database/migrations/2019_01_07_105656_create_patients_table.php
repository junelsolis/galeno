<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('name');
            $table->string('middle_initial')->nullable();
            $table->string('surname');
            $table->string('suffix')->nullable();
            $table->date('date_of_birth');
            $table->string('gender');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->unsignedInteger('provider_id');
            $table->boolean('active')->default(true);
            $table->timestamps();

            $table->foreign('provider_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
