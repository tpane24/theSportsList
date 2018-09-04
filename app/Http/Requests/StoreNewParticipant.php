<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNewParticipant extends FormRequest
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
          'inputEmail' => 'email|required|unique:participants,email',
          'inputPhone' => 'required|min:9',
          'inputPassword' => 'required|min:7',
          'inputConfirmPassword' => 'required|min:7|same:inputPassword',
        ];
    }
}
