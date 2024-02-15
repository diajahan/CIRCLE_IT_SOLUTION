<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;

    protected $table='footer-info';
    protected $fillable = [
        'id',
        'house',
        'floor',
        'road',
        'city',
        'country',
        'phone',
        'email',
        'website',
    ];

protected $primaryKey = 'id';

}
