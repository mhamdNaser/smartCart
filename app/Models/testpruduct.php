<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class testpruduct extends Model
{
    use HasFactory;
    public $timestamps = false;

    public $translatedAttributes = ['title', 'description'];

    protected $fillable = [
        'Code',
        'discount',
        'price'
    ];
}
