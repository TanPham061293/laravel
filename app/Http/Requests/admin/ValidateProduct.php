<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class ValidateProduct extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    // public $table;
    // public $column;
    public function authorize(): bool
    {
        return true;
    }
    // public function setter($table, $column)
    // {
    //     $this->table = $table;
    //     $this->column = $column;
    // }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $id =  $this->request->get('id');
        return [
            //
            'tenvi'=>'required',
            'slugvi' => 'unique:product_list,tenkhongdauvi,'.$id,
        ];
    }
    public function messages(){
        return [
            'tenvi.required' =>'Chưa nhập tiêu đề.',
            'slugvi.unique' =>'Đường dẫn đã tồn tại. Vui lòng nhập đường dẫn mới.'
        ];
    }
}
