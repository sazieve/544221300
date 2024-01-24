<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class create_menu extends Model
{
    protected $table='Invoice';
    protected $primarykey='Tanggal';
    protected $fillable=[
        'Jumlah'
    ];

}
