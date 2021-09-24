<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HogeRequest extends FormRequest
{
    public function rules()
    {
        return [
            'postcode'=>'required|string'
        ];
    }

    public function prepareForValidation()
    {
        $this->merge(['postcode'=>mb_convert_kana($this->postcode,'n')]);
    }
}
