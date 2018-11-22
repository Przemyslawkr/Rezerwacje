<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
            'Description'=> 'required|max:255',
            'Price'=>'required|numeric'
        ];
    }
    
    public function messages() {
        return [
          'Description.required'=>'Pole opis jest wymagane',
          'Price.required'=>'Pole cena jest wymagane',
          'Price.numeric'=>'Pole cena musi być liczbą'
        ];
    }
}
