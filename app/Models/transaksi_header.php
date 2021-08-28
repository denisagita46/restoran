<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class transaksi_header extends Model
{
    //
    protected $table = 'transaksi_header';
    protected $primaryKey = 'id_header';
	protected $fillable = [
        'id_header','id_menu','tgl_transaksi','atas_nama','total_harga','status'
    ];
}
