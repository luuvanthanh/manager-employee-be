<?php

namespace Hrm\User\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeCreateRequest extends FormRequest
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
            'name' => 'required',
            // 'address' => 'string',
            // 'fullname' => 'required|string',
            // 'email' => 'required|email|unique:employees',
            // 'phone' => 'required|min:10|max:10'
        ];
    }

    public function messages()
    {
        return [
            // 'name.required' => 'thanh'
        ];
    }
}
