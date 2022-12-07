<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comentes extends Model
{
    use HasFactory;
    protected $fillable=['id','name', 'photo','num','num-add','min_price','price'];
}
