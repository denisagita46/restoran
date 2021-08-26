<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class table_meja extends Model
{
    protected $table = 'table_meja';
    protected $primaryKey = 'id_meja';
    protected $fillable = [
        'id_meja', 'nomor_meja','lokasi'
    ];
}
