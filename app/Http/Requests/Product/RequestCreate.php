<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class RequestCreate extends FormRequest
{
    public function authorize()
    {
        return auth()->check() && auth()->user()->hasRole('Admin');
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'measure_id' => 'required',
            'category_id' => 'required',
            'photo' => 'sometimes|image|mimes:png,jpg'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Produto',
            'measure_id' => 'Medida',
            'category_id' => 'Categoria'
        ];
    }
}
