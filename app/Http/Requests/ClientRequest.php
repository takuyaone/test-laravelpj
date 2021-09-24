<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
            'name' => ['required', 'string'],
            'email' => 'required|email',
            'postcode' => ['required', 'min:8'],
            'address' => 'required',
            // 'building_name' => 'nullable',
            'opition' => 'required'
        ];
    }

    public function prepareForValidation()
    {
        $this->merge(['postcode' => mb_convert_kana($this->postcode, 'na')]);
    }

    public function messages()
    {
        return[
            'name.required' => '名前を入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスの形式で入力してください',
            'postcode.required'=>'郵便番号を入力してください',
            'postcode.min' => '8文字で入力してください',
            'address.required' => '住所を入力してください',
            // 'building_name' => 'nullable',
            'opition.required' => 'ご意見内容を入力してください'
        ];
    }

    protected function getRedirectUrl()
    {
        return '/';
    }
}
