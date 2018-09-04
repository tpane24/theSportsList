<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNewAdd extends FormRequest
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
          'inputCreatedBy' => 'integer|required',
          'inputEventName' => 'string|required',
          'inputSport' => 'string|required',
          'inputType' => 'string|required',

          'inputStartMonth' => 'numeric|digits_between:1,2|min:1|max:12|required',
          'inputStartDay' => 'numeric|digits_between:1,2|min:1|max:31|required',
          'inputStartYear' => 'integer|digits:4|min:2018|max:2050|required',

          'inputEndMonth' => 'numeric|digits_between:1,2|min:1|max:12|required',
          'inputEndDay' => 'numeric|digits_between:1,2|min:1|max:31|required',
          'inputEndYear' => 'integer|digits:4|min:2018|max:2050|required',

          'inputStartHour' => 'numeric|digits_between:1,2|min:1|max:12|required',
          'inputStartMinute' => 'numeric|digits:2|min:0|max:45|required',
          'inputStartTOD' => 'string|size:2|required',

          'inputEndHour' => 'numeric|digits_between:1,2|min:1|max:12|required',
          'inputEndMinute' => 'numeric|digits:2|min:0|max:45|required',
          'inputEndTOD' => 'string|size:2|required',

          'inputAge' => 'string|size:5|required',
          'inputGender' => 'string|min:4|max:6|required',
          'inputLink' => 'string',
          'inputDescription' => 'string|required',

          'inputAddress' => 'string|required',
          'inputCity' => 'string|max:50|required',
          'inputState' => 'string|size:2|required',
          'inputZip' => 'numeric|digits:5|required',
        ];
    }
}
