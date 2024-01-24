<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class create_admin extends Model
{
    protected $table='admin';
    protected $primarykey='Username';
    protected $fillable=[
        'password',
        'login'
    ];

}
