<?php

namespace App\Http\Controllers\Admin;

use App\EspecializacaoMedico;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PhpParser\Node\Stmt\Return_;

class EspecializacaoMedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $especializacoes = EspecializacaoMedico::latest()->get();

        return view('admin.especializacao_medico.index', compact('especializacoes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.especializacao_medico.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        EspecializacaoMedico::create($request->all());
        Return redirect()->route('especializacoes.index')->with('success', 'Especialização Adicionada com Sucesso!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(EspecializacaoMedico $especializacaoMedico)
    {
        return view('admin.especializacao_medico.edit', compact('especializacaoMedico'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EspecializacaoMedico $especializacaoMedico)
    {
        $dados = $request->all();
        $dados['ativo'] = $request->ativo ?? false;
        $especializacaoMedico->update($dados);
        Return redirect()->route('especializacoes.index')->with('success', 'Especialização Atualizada com Sucesso!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(EspecializacaoMedico $especializacaoMedico)
    {
        $especializacaoMedico->delete();
        Return redirect()->route('especializacoes.index')->with('success', 'Especialização Removida com Sucesso!');

    }
}
