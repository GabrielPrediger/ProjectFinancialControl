<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PilotoRequest extends FormRequest
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
            'nome' => 'required',
            'numero' => 'required',
            'vitorias' => 'required',
            'dt_nascimento' => 'required',
            'inicio_atividades' => 'required',
            'pais' => 'required',
            'equipe' => 'required',
        ];
    }
}
