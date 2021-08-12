<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestRegister extends FormRequest
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
            'name' => ['required', 'string', 'min:4 ', 'max:255'],
            'emailUser' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'passwordregis' => ['required', 'string', 'min:8'],
            'password_confirmation' => ['required', 'same:passwordregis']
        ];
    }

    public function messages()
    {
        return [
            'passwordregis.required' => "The password field is required.",
            'password_confirmation.same' => "The confirm password does not match."
        ];
    }
}
