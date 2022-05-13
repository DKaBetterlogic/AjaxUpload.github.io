<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormControllerRequest extends FormRequest
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
            'firstname' => 'required|max:25',
            'lastname' => 'required|max:25',
            'address' => 'required',
            'gender' => 'required',
            'state' => 'required|max:25',
            'city' => 'required|max:25',
            'pincode' => 'required|max:10',
            'course' => 'required|max:25',
            'email' => 'required|unique:forms',
        ];
    }
    public function message()
    {
        return [
            'firstname' => 'firstname not have more then 25 character',
            'lastname' => 'firstname not have more then 25 character',
        ];
    }

}
