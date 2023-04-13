<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class testpruduct extends Model
{
    use HasFactory;
    public $timestamps = false;
    
    protected $fillable = [
        'Code',
        'Name',
        'discount',
        'price'
    ];
}
