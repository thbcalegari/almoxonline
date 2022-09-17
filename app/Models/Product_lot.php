<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use NumberFormatter;

class Product_lot extends Model
{
    protected $fillable = [
        'product_id',
        'manufactorer_id',
        'trademark',
        'lot',
        'unit_price',
        'manufacturing_date',
        'expiration_date',
        'bar_code'
    ];

    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function getPriceAttribute(){
        $fmt = numfmt_create('pt-BR', NumberFormatter::CURRENCY);
        return numfmt_format_currency($fmt, $this->attributes['unit_price'], 'BRL');
    }
}
