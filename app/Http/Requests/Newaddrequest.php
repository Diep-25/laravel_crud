<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class Newaddrequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [

            'title' => 'required',
            'content' => 'required',
            'img' => 'required'


        ];
    }
    public function messages()
{
    return [
        'title.required' => 'Không được để trống ! ',
        'content.required' => 'Không được để trống ! ',
        'img.required' => 'Không được để trống ! ',

    ];
}
}
