<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerCraftImage extends Model
{
    use HasFactory;

    protected $table='customers-craft_images';
    protected $fillable=['image','customer_craft_id'];

    public function customerCraftImage(){
        return $this->belongsTo(CustomerCraft::class);
    }
}
