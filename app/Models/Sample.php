<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sample extends Model
{
    use HasFactory;

    protected $table = 'samples';

    protected $fillable = [
        'name',
        'brand_id'
    ];

//    public function brand()
//    {
//        return $this->belongsTo(Brand::class,'brand_id');
//    }


}
