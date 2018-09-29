<?php

namespace App\Http\Controllers\Atendente;

use App\Funcoes\Datas;
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
    		$dados['start'] = $agendamento->data_pre_agendamento->toDateTimeString();
    		$dados['color'] = $agendamento->cor_calendario;

    		array_push($resposta, $dados);
    	}

    	return json_encode($resposta);
    	// return $agendamentos->toJson();
    }

    public function confrimaAgendamento(Agendamento $agendamento){

        return view('atendente.agendamentos.edit', compact('agendamento'));
    }

    public function update(Request $request, Agendamento $agendamento){
        $dados = $request->all();
        $dados["data_pre_agendamento"] = Datas::FormataDataBanco($request->data_pre_agendamento);
        $dados["confirmada"] = $request->confirmada ?? false;

        $agendamento->update($dados);

        return redirect()->route('agendamentos.index')->with('success','Consulta confirmada com sucesso!');
    }
}
