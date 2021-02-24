<?php

namespace Nexmo\Header\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HeaderCreateRequest extends FormRequest
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
            'title' => 'required|max:100',
            'instagram' => 'nullable|max:100',
            'telegram' => 'nullable|max:100',
            'linkedin' => 'nullable|max:100',
            'image' => 'required|max:100|mimes:png,jpg,jpeg'
        ];
    }
}
