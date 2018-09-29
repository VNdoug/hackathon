<?php

namespace App\Http\Controllers\Medico;

use App\Agendamento;
use App\Funcoes\Datas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AtendimentoController extends Controller
{
    public function index(){
        $atendimentos = Agendamento::latest()->get();

        return view('medico.atendimentos.index', compact('atendimentos'));
    }

    public function edit($id){
        $atendimento = Agendamento::find($id);

        return view('medico.atendimentos.edit', compact('atendimento'));
    }

    public function update(Request $request, $id){
        $dados =$request->except('sintomas');
        $atendimento = Agendamento::find($id);


        if($request->data_retorno && $request->hora_retorno){
            $dados["data_retorno"] = Datas::FormataDataBanco($request->data_retorno);
            $dados["hora_retorno"] = $request->hora_retorno;
        }

        $atendimento->update($dados);

        return redirect()->route('atendimentos.index')->with('success', 'Atendimento Finalizado com Sucesso!');

    }
}
