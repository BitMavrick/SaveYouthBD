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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->string('subject');
            $table->string('doctor_id');
            $table->string('patient_id');
            $table->string('patient_name');
            $table->string('patient_age');
            $table->string('patient_gender');
            $table->string('meet_link')->nullable();
            $table->dateTime('schedule_time');
            $table->integer('approve')->default(0);
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
        Schema::dropIfExists('schedules');
    }
};