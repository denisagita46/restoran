<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablePelanggan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
		Schema::create('table_pelanggan', function (Blueprint $table) {
            $table->bigIncrements('id_pelanggan');
			$table->string('nama_pelanggan');
			$table->string('telepon');
            $table->string('jenis_kelamin');
			$table->string('email');
			$table->string('alamat');
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
		Schema::dropIfExists('table_pelanggan');
    }
}
