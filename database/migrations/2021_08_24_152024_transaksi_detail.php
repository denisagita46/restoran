<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TransaksiDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
		Schema::create('transaksi_detail', function (Blueprint $table) {
			$table->bigIncrements('id_detail');
			$table->integer('id_header');
			$table->date('id_menu');
			$table->string('qty');
			$table->integer('catatan');
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
		Schema::dropIfExists('transaksi_detail');
    }
}
