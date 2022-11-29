<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblDiagnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_diagnos', function (Blueprint $table) {
            $table->bigIncrements('t_patient_id');
            $table->string('t_patient_name');
            $table->string('t_patient_contact');
            $table->string('t_patient_serial');
            $table->string('t_patient_testname');
            $table->string('t_patient_total');
            $table->string('t_patient_due');
            $table->string('t_patient_discount');
            $table->string('t_patient_deliverydate');
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
        Schema::dropIfExists('tbl_diagnos');
    }
}
