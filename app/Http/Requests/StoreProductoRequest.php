<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:20',
            'avatar' => 'required|image',
            'slug' => 'required',
            'comentario' => 'required',
            'tipo' => 'required',
            'categoria' => 'required',
            'infointeres' => 'required',
            'usorecomendado' => 'required',
            'lugarorigen' => 'required',
            'clima' =>'required'

        ];
    }
}
