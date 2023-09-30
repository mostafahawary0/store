<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    protected $tabel = "sections";
    protected $fillable = ['id','sectionAR','sectionEN'];


      
    public function product(){
        return $this->hasOne(Product::class);
    }


}


