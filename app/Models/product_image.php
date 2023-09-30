<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_image extends Model
{
    use HasFactory;

    protected $tabel = "product_images";
    protected $fillable = ['id','product_id','section_id','image'];


    public function  Productimages(){
        return $this->belongsTo(Product::class);
    }
   
}
 