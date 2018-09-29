<?php

namespace App\Http\Controllers\Medico;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;

class AgendamentoController extends Controller
{
    public function index()
    {
        return view('medico.agendamentos.index');
    }

    public function ajaxGet() {
        $agendamentos = Auth::user()->consultas()->confirmadas()->with('paciente')->get();
        $resposta = [];

        foreach ($agendamentos as $agendamento) {
            $dados['title'] = $agendamento->paciente->name;
            $dados['start'] = $agendamento->data_pre_agendamento->toDateTimeString();
            $dados['color'] = $agendamento->cor_calendario;

            $dados['url'] = route('atendimentos.edit', $agendamento->id);

            array_push($resposta, $dados);
        }

        return json_encode($resposta);
    }
}
