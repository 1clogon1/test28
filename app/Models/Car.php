<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $table = 'cars';

    protected $fillable = [
        'brand_id',
        'sample_id',
        'release_year',
        'mileage',
        'color',
    ];

//    public function brand()
//    {
//        return $this->hasOne(Brand::class);
//    }



}
