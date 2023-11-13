<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class ValidateForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'username' => 'required|min:5',
            'password' =>'required',
        ];
    }
    public function messages(): array
    {
        return [
            //
            'username.required' => 'Chưa nhập :attribute .',
            'username.min' => ':attribute độ dài tối thiểu 5 ký tự.',
            'password.required' => 'Chưa nhập :attribute.',
        ];
    }
}
