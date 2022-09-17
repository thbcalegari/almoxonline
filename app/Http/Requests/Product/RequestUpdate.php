<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class RequestUpdate extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check() && auth()->user()->hasRole('Admin');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'sometimes',
            'measure_id' => 'sometimes',
            'category_id' => 'sometimes',
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
