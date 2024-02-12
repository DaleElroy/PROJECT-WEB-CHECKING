<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $fillable = ['gender', 'address','gender'];
    use HasFactory;
    public function userDetail(){
        return $this->belongTo(User::class);
    }
}
