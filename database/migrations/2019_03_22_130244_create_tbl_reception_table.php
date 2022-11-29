<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblReceptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_reception', function (Blueprint $table) {
            $table->bigIncrements('reception_id');
            $table->string('reception_name');
            $table->string('reception_phone');
            $table->string('reception_address');
            $table->string('reception_username');
            $table->string('reception_password');
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
        Schema::dropIfExists('tbl_reception'); 
    }
}
