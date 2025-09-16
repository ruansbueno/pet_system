<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => 'required|string|min:5',
            'price' => 'required|numeric',
            'weight' => 'required|numeric',
            'arquivo' => 'required',
            'description' => 'required|string|min:15'
        ];
    }

    public function messages(){
        return [
            'name.required' => 'O campo nome é obrigatório',
            'price.required' => 'O campo preço é obrigatório',
            'weight.required' => 'O campo peso é obrigatório',
            'arquivo.required' => 'O campo de arquivo é obrigatório',
            'description.required' => 'O campo de descrição é obrigatório',
            'name.min' => 'O Nome precisa ser de no mínimo :min caracteres',
            'description.min' => 'A descrição precisa ser de no mínimo :min caracteres'
        ];
    }
}
