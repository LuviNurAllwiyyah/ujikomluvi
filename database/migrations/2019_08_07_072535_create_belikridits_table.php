<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBelikriditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('belikridits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('kridit_kode');
            $table->string('pembeli_no_ktp');
            $table->Integer('paket_kode');
            $table->Integer('motor_kode');
            $table->date('kridit_tanggal');
            $table->boolean('fotokopi_ktp');
            $table->boolean('fotokopi_kk');
            $table->boolean('fotokopi_slip_gaji');
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
        Schema::dropIfExists('belikridits');
    }
}
