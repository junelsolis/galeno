<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->string('name');
            $table->enum('gender', ['M', 'F']);
            $table->date('dob');
            $table->string('occupation', 60);
            $table->string('phone', 50);
            $table->string('email')->nullable();
            $table->string('address');
            $table->string('city');
            $table->string('guardian_name');
            $table->string('guardian_phone', 50);
            $table->string('nhif_number');
            $table->string('nhif_owner');
            $table->string('profile_image_url')->required();
            $table->boolean('active')->default(1);
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
        Schema::dropIfExists('patients');
    }
}
