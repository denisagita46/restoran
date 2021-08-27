<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class table_pelanggan extends Model
{
	protected $table = 'table_pelanggan';
        protected $primaryKey = 'id_pelanggan';
	protected $fillable = [
        'id_pelanggan', 'nama_pelanggan','telepon','jenis_kelamin','email','alamat'
    ];
}
