<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $tabel = "products";
    protected $fillable = ['id','titleAR','titleEN','section_id','price','image','descriptionAR','descriptionEN'];
   
   
 

    public function  section(){
        return $this->belongsTo(Section::class);
    }

    public function images(){
        return $this->hasMany(product_image::class,'product_id');
    }
 
    
}
