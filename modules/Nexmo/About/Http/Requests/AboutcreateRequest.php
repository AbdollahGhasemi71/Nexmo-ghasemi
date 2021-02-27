<?php

namespace Nexmo\About\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutcreateRequest extends FormRequest
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
            'title'=>'required|max:100',
            'body'=>'required',
            'image'=>'required|mimes:jpg,jpeg,png|max:100',
            'job'=>'required|max:200',
            'birthday'=>'required|max:100',
            'website'=>'required|max:200',
            'phone'=>'required|max:100',
            'city'=>'required|max:100',
            'age'=>'required|max:100',
            'degree'=>'required|max:100',
            'email'=>'required|email|max:100',
            'description'=>'required'
        ];
    }
}
