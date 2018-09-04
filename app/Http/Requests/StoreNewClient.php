<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNewClient extends FormRequest
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
        'inputName' => 'string|required',
        'inputBusinessName' => 'string|required',
        'inputEmail' => 'email|required|unique:clients,email',
        'inputPhone' => 'required|min:9',
        'inputAddress' => 'string|required',
        'inputCity' => 'string|max:50|required',
        'inputState' => 'string|size:2|required',
        'inputZip' => 'numeric|digits:5|required',
        'inputPassword' => 'required|min:7',
        'inputConfirmPassword' => 'required|min:7|same:inputPassword',
      ];
    }
}
