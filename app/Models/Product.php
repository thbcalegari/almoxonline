<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'measure_id',
        'category_id',
        'photo'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
