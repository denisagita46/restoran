<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi_detail extends Model
{
    //
	protected $table = 'transaksi_detail';
    protected $primaryKey = 'id_detail';
	protected $fillable = [
        'id_deatil','id_header','id_menu','qty','catatab'
    ];
}
