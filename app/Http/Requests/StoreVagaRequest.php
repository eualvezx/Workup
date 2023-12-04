<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVagaRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'titulo' => ['required', 'string', 'max:32'],
            'salario' => ['required', 'numeric', 'max:255'],
            'carga_hr' => ['required', 'numeric', 'min:8'],
            'descricao'=>['required', 'string', 'max:64'],
            'lmt_candidatos'=>['required', 'numeric', 'max:12'],
        ];
    }
}
