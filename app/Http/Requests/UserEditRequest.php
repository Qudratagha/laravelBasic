<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserEditRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required',
        ];
    }
    public function messages()
     {
        return [
                'name.required' =>'name is always required',
                'email.required' =>'email is always required',
             ];
    }
}
