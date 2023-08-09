<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true ;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>['required'],
            'statut'=>['required'],
            'description'=>['required'],
            'price'=>['required','max:255'],
            'first_image'=>['required'],
            'quantity'=>['required','integer'],
            'first_image'=>['required'],
            'two_image'=>['required'],
            'three_image'=>['required'],
            'for_image'=>['required'],
        ];
    }
}
