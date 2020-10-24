<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     * @return array
     */
    public function rules()
    {
        return [
            'resume' => 'required|min:5|max:200',
            'client' => 'required|max:80',
            'power_system' => 'required|max:40',
            'economy_money' => 'required|max:20',
            'economy_co2' => 'required|max:25',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Informação obrigatória',
            'client.required' => 'informe o cliente deste projeto',
            'resume.min' => 'Informe mais dados deste projeto caracteres',
            'max' => 'Este campo deve ter no minimo :max caracteres',
            'mimes' => 'O arquivo precisa ser nas extensões: jpg, jpeg ou png'
        ];
    }
}
