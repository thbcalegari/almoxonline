<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufactorer extends Model
{
    protected $fillable = [
        'name',
        'cnpj',
        'address',
        'email',
        'phone'
    ];
}
