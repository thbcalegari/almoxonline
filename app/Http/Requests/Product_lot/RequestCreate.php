<?php

namespace App\Http\Requests\Product_lot;

use Illuminate\Foundation\Http\FormRequest;

class RequestCreate extends FormRequest
{
    public function prepareForValidation(){
        $this->merge([
            'unit_price' => floatval(str_replace(',' , '.', str_replace(['R$ ', '.'],'', $this->unit_price)))
        ]);
    }
    
    public function authorize()
    {
        return auth()->check() && auth()->user()->hasRole('Admin');
    }

    public function rules()
    {
        return [
            'product_id' => 'required',
            'manufactorer_id' => 'required',
            'trademark' => 'required',
            'lot' => 'required',
            'unit_price' => 'required|numeric',
            'manufacturing_date' => 'required',
            'expiration_date' => 'sometimes',
            'bar_code' => 'required'
        ];
    }
}
