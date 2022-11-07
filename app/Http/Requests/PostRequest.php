<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{

    // protected $redirect = '/post/add';


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
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */   
    public function messages()
    {
        return [
            'title.required'   => 'Requied Field',
            'title.unique'     => 'Must Be Unique',
        ];
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title'   => 'required|unique:posts',
            'content' => 'required',
            'image'   => 'mimes:jpg,png,jpeg',
        ];
    }
}
