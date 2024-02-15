<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    protected $table = 'videos';
    protected $fillable = [
        'embade_code',
        'thumbnail_image',
        'product_id'
    ];

    public function ProdVideo()
    {
        return $this->belongsTo(Product::class);
    }
}
