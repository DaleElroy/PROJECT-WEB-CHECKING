<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Latest extends Model
{
    protected $fillable = ['latest_product','name'];
    use HasFactory;
}
