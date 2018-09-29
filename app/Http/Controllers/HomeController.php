<?php

namespace App\Http\Controllers;

use App\Agendamento;
use App\EspecializacaoMedico;
use App\Funcoes\Datas;
use App\Http\Requests\AgendamentoRequest;
use App\User;
use Illuminate\Http\Request;
use Response;
use Validator;

class HomeController extends Controller
{
    public function index(){
        $especializacoes = EspecializacaoMedico::ativo()->orderBy('descricao')->pluck('descricao', 'id');
        return view('site.index', compact('especializacoes'));
    }

    public function store(AgendamentoRequest $request){
//        dd($request->all());

            $dados = $request->all();
            $dados["email"] = $request->cpf."@example.com";
            $dados["password"] = bcrypt($request->cart_sus);
            $user = User::create($dados)->assignRole('paciente');;

            $dados_agendamento = $request->all();
            $dados_agendamento["paciente_id"] = $user->id;
            $dados_agendamento["confirmada"] = false;
            $dados_agendamento["data_pre_agendamento"] = Datas::FormataDataBanco($request->data_pre_agendamento);

            Agendamento::create($dados_agendamento);
            return back()->with('success', 'Consulta Agendada com sucesso!');
    }

    public function ajaxMedicos(Request $request){
        $medicos = User::role('medico')->where('especializacao_id', $request->especializacao_id)->orderBy('name')->pluck('name', 'id');
        return \Response::json($medicos, 200);
    }
}
