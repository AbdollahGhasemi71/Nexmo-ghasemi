<?php

namespace Nexmo\ContactBack\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactBackcreateRequest extends FormRequest
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
            'call'=>'required|max:100',
            'email'=>'required|max:200',
            'location'=>'required|max:100'
        ];
    }
}
