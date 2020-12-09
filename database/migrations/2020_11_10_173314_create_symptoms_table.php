<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSymptomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('symptoms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bookings_id'); // foreign key
            $table->string('temperature');
            $table->string('bloodPressure');
            $table->string('pulseOximetry');
            $table->string('weight');
            $table->string('height');
            $table->string('bloodGroup');
            $table->string('medicalState');
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
        Schema::dropIfExists('symptoms');
    }
}
