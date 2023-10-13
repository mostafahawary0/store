<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $tabel = "orders";
protected $fillable = ['id','name', 'phone', 'country', 'city', 'number', 'address', 'description', 
'product', 'price', 'img', 'noti'];
}
