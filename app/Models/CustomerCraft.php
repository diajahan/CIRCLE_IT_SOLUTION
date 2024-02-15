<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerCraft extends Model
{
    use HasFactory;

    protected $table='customers-crafts';
    protected $fillable=['name','email','phone','address'];

    public function customerCraft(){
        return $this->hasMany(CustomerCraftImage::class);
    }
}
