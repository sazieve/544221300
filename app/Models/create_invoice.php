<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class create_invoice extends Model
{
    protected $table='Username';
    protected $primarykey='UserId';
    protected $fillable=[
        'Email',
        'Password'
    ];
}
