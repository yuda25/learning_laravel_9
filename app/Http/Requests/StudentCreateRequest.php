<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentCreateRequest extends FormRequest
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
            'name' => 'max:50|required',
            'gender' => 'required',
            'nis' => 'unique:students|max:10|required',
            'class_id' => 'required',
        ];
    }

    // untuk update atribute
    public function attributes()
    {
        return [
            'class_id' => 'class',
        ];
    }

    // untuk custom message
    public function messages()
    {
        return [
            'name.required' => 'name tidak boleh kosong.',
            'gender.required' => 'genre tidak boleh kosong.',
            'nis.required' => 'NIS tidak boleh kosong.',
            'class_id.required' => 'class tidak boleh kosong.',
            'nis.max' => 'NIS tidak boleh lebih dari :max karakter.',
        ];
    }
}
