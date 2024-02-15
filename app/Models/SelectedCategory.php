<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SelectedCategory extends Model
{
    use HasFactory;

    protected $table='selected_category';
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

    // protected $primaryKey = 'id';

    public function childrenSelected()
    {
        return $this->hasMany(SelectedCategory::class,'parent_id');
    }
    
    // public function children(){
    //         return $this->hasMany(Category::class, 'parent_id');
    //     }
        
    public function parent(){
        return $this->belongsTo(Category::class, 'parent_id');
        }    
    
    public function products(){
        return $this->hasMany(Product::class,'cate_id');
    }
    
    
    
    public function subcategories(){
        
        return $this->hasMany('App\Models\SelectedCategory','parent_id')->where('status',1);
        
    }
    
    public function getCategories(){
        
        $getCategories=SelectedCategory::with('subcategories')->where('parent_id', 0)
        ->where('status',1)
        ->get()
        ->toArray();
        
        return $getCategories;
    }
    
    
    
    
    
    



}
