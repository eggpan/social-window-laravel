<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
// 追加
use Illuminate\Validation\Rule;

class InquiryRequest extends FormRequest
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
            'name'         => ['required', 'string'],
            'email'        => ['required', 'email'],
            'relationship' => ['required', Rule::in(config('relationship'))],
            'content'      => ['required', 'string'],
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'お名前',
            'email' => 'メールアドレス',
            'relationship' => '社会の窓が空いている人との関係',
            'content' => '何か伝えたいこと',
        ];
    }
}
