<?php

namespace Nexmo\Skill\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SkillCreateRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'title'=>'required|max:100',
            'body'=>'required',
            'skill'=>'required|max:100',
            'spotted'=>'required|max:100',
            'value'=>'required|max:100'
        ];
    }
}
