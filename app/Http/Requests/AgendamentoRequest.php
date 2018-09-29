<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AgendamentoRequest extends FormRequest
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
            'telefone' => 'required',
            'cart_sus' => 'required',
            'cpf' => 'required|unique:users',
            'especializacao_id' => 'required',
            'medico_id' => 'required',
            'data_pre_agendamento' => 'required',
            'hora_pre_agendamento' => 'required',
            'sintomas' => 'required',
//            'g-recaptcha-response' => 'required|captcha'
        ];
    }
}
