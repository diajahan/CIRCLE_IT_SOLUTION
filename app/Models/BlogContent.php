<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogContent extends Model
{
    use HasFactory;


    protected $table='blog_contents';
    protected $primaryKey ='id';

    protected $fillable=['content','blog_id'];

    public function blogImages(){
        return $this->hasMany(BlogImage::class);
    }

    public function Blog(){
        return $this->belongsTo(Blog::class);
    }
}
