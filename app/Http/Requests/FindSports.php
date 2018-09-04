<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FindSports extends FormRequest
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
          'inputSport' => 'string|required',
          'inputType' => 'string|required',
          'inputAge' => 'string|size:5|required',
          'inputGender' => 'string|min:4|max:6|required',
          'inputZip' => 'numeric|digits:5|required',
          'inputRadius' => 'numeric|required',
        ];
    }
}
