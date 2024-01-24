<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class create_invoiced extends Model
{
    protected $table='Nama_Menu';
    protected $primarykey='Menu_Id';
    protected $fillable=[
        'Gambar_Menu',
        'Harga',
        'Deskripsi'
    ];

}
