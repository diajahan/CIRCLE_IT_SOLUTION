<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table='blogs';
    protected $primaryKey ='id';

    protected $fillable=['title','equipments','blog_cover_image'];


    // public function Content(){
    //     return $this->hasMany(Content::class);
    // }
}
