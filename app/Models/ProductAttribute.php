<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAttribute extends Model
{
    use HasFactory;
    protected $table='product_attributes';
    protected $fillable = ['att_name'];

    public function attrValues(){
        return $this->hasMany(AttributeValue::class);
    }
}
