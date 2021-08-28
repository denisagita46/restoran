<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TransaksiHeader extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
		Schema::create('transaksi_header', function (Blueprint $table) {
            $table->bigIncrements('id_header');
			$table->integer('id_meja');
			$table->date('tgl_transaksi');
			$table->string('atas_nama');
			$table->integer('total_harga');
			$table->integer('status');
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
        //
		Schema::dropIfExists('transaksi_header');
    }
}
