<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomersReview extends Model
{
    use HasFactory;

    protected $table = 'customers-reviews';
    protected $fillable = [
        'name',
        'phone',
        'email',
        'image',
        'review'
    ];

}
