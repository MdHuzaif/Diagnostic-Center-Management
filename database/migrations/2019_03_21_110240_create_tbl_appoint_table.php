<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblAppointTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_appoint', function (Blueprint $table) {
             $table->bigIncrements('b_patient_id');
             $table->string('b_patient_name');
             $table->string('b_patient_serial');
             $table->string('b_patient_date');
             $table->string('b_patient_time');
             $table->string('b_patient_contact');
             $table->string('b_patient_payment');
             $table->string('b_patient_due');
             $table->string('doctor_id');
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
        Schema::dropIfExists('tbl_appoint');
    }
}
