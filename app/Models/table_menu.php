<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class table_menu extends Model
{
    //
	 protected $fillable = [
        'id_menu', 'kategori_menu','nama_menu','harga','deskripsi'
    ];
}
