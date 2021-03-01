<?php

namespace Nexmo\Portfolio\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PortfolioUpdateRequest extends FormRequest
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
            'body' => 'required',
            'link' => 'required|max:100',
            'image' => 'mimes:png,jpeg,jpg|max:5000'
        ];
    }
}
