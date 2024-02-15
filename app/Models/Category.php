<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table='categories';
    protected $fillable = [
        'id',
        'parent_id',
        'level',
        'category_name',
        'order_level',
        'slug',
        'image',
        'description',
        'status',
        'featured',
        'meta_title',
        'meta_description',
        'meta_keywords'
    ];

    protected $primaryKey = 'id';

    public function children()
    {
        return $this->hasMany(Category::class,'parent_id');
    }

    public function products()
    {
        return $this->hasMany(Product::class);

    }



}
