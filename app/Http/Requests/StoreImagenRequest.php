<?php

namespace Socialite\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreImagenRequest extends FormRequest
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
        // Validaciones.
        return [
            'nam_img' => 'required|max: 10',
            'description' => 'required|max: 200',
            'slug' => 'required',
            'imagen' => 'required|image'
        ];
    }
}
