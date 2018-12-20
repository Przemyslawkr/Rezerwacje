<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemRequest extends FormRequest
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
            'Date_from'=>'required|after:yesterday',
            'Date_to'=>'required|after:Date_from'
        ];
    }
    public function messages() {
        return [
          'Date_from.reqiured'=>'Proszę podać datę początkową',
          'Date_to.reqiured'=>'Proszę podać datę końcową',
          'Date_to.after'=>'Data końcowa musi być pózniejsza niż początkowa',
          'Date_from.after'=>'Data początkowa nie może być z przeszłości'
        ];
    }
}
