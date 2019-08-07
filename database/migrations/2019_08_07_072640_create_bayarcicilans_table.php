<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBayarcicilansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bayarcicilans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('cicilan_kode');
            $table->Integer('kridit_kode');
            $table->date('cicilan_tanggal');
            $table->string('cicilan_jumlah');
            $table->string('cicilan_ke');
            $table->string('cicilan_sisa_ke');
            $table->double('cicilan_sisa_harga');
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
        Schema::dropIfExists('bayarcicilans');
    }
}
