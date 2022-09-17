<?php

namespace App\Http\Requests\Product_lot;

use Illuminate\Foundation\Http\FormRequest;

class RequestUpdate extends FormRequest
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
            'product_id' => 'sometimes',
            'manufactorer_id' => 'sometimes',
            'trademark' => 'sometimes',
            'lot' => 'sometimes',
            'unit_price' => 'sometimes|numeric',
            'manufacturing_date' => 'sometimes',
            'expiration_date' => 'sometimes',
            'bar_code' => 'sometimes'
        ];
    }
}
