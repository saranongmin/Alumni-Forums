<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            
            'name' => ['required','min:3','max:100'],
            'department' => ['required','min:3','max:500'],
            'batch_id'=>['required','min:1','max:20'],
            'graduation_year'=>['required'],
            'email'=>['required','max:255','unique:users'],
            'phone'=>['required','min:11','max:15'],
            'address'=>['required'],

        ];
    }

}
