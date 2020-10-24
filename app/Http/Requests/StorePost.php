<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePost extends FormRequest
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
            'file' => 'required|mimes:jpg,jpeg,png',
            'title' => 'required|min:5|max:30|unique:posts',
            'summary' => 'required|min:5|max:100',
            'description' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'file.required' => 'Insira uma imagem para este post',
            'required' => 'Este campo é obrigatório',
            'unique' => 'Este título inserida já existe',
            'min' => 'Este campo deve ter no minimo :min caracteres',
            'max' => 'Este campo deve ter no minimo :max caracteres',
            'mimes' => 'O arquivo precisa ser nas extensões: jpg, jpeg ou png'
        ];
    }
}
