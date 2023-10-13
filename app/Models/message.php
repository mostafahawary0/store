<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class message extends Model
{
    use HasFactory;
    protected $tabel = "message";
    protected $fillable = ['id','name', 'phone', 'description', 'noti'];
}
