<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBelicashesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('belicashes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('cash_kode');
            $table->string('pembeli_no_ktp');
            $table->Integer('motor_kode');
            $table->date('cash_tanggal');
            $table->double('cash_bayar');
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
        Schema::dropIfExists('belicashes');
    }
}
