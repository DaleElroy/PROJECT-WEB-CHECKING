<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model


{
    protected $fillable = ['title','price','category','description','gallery'];
    use HasFactory;
}
