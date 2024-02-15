<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogImage extends Model
{
    use HasFactory;

    protected $table='blog_images';
    protected $primaryKey ='id';

    protected $fillable=['blog_id','blog_content_id','image'];


    public function Content(){
        return $this->belongsTo(BlogContent::class);
    }

    public function Blog(){
        return $this->belongsTo(Blog::class);
    }
}
