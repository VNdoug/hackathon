<?php

namespace App\Http\Controllers\Atendente;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Agendamento;

class AgendamentoController extends Controller
{
    public function index()
    {
        return view('atendente.agendamentos.index');
    }

    public function ajaxGet() {
    	$agendamentos = Agendamento::comRelacionamentos()->get();
    	$resposta = [];

    	foreach ($agendamentos as $agendamento) {
    		$dados['title'] = $agendamento->medico->name . " - " . $agendamento->paciente->name;
    		$dados['start'] = $agendamento->data_pre_agendamento;
    		$dados['color'] = $agendamento->cor_calendario;

    		array_push($resposta, $dados);
    	}

    	return json_encode($resposta);
    	// return $agendamentos->toJson();
    }
}
