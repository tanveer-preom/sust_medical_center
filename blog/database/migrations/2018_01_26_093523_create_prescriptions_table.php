<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prescriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('student_id')->references('id')->on('students');
            $table->unsignedInteger('doctor_id')->references('id')->on('doctors');
            $table->string('weight');
            $table->string('height');
            $table->string('age');
            $table->string('description');
            $table->string('test');
            $table->string('medications');
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
        Schema::dropIfExists('prescriptions');
    }
}
