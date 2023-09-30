<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $tabel = "abouts";
    protected $fillable = ['id','contentAR','contentEN','photo'];
}
