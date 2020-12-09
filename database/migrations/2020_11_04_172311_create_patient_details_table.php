<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_details', function (Blueprint $table) {
            $table->bigIncrements('patientId');
            $table->unsignedBigInteger('user_id'); //foreign key
            $table->string('patientFname');
            $table->string('patientSname');
            $table->string('patientGender');
            $table->date('patientDOB');
            $table->string('patientCountry');
            $table->string('patientCity');
            $table->string('patientAddress');
            $table->string('patientContact');
            $table->string('patientStatus');
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
        Schema::dropIfExists('patient_details');
    }
}
