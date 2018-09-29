<?php

namespace App\Http\Controllers\Admin;

use App\EspecializacaoMedico;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicos = User::role('medico')->with('especializacao')->latest()->get();
        return view('admin.medicos.index', compact('medicos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $especializacoes = EspecializacaoMedico::ativo()->orderBy('descricao')->pluck('descricao', 'id');

        return view('admin.medicos.create', compact('especializacoes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dados = $request->except('password_confirmation');

        $dados['password'] = bcrypt($dados['password']);

        User::create($dados)->assignRole('medico');

        return back()->with('success', 'Medico cadastrado com sucesso!');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medico = User::find($id);
        $especializacoes = EspecializacaoMedico::ativo()->orderBy('descricao')->pluck('descricao', 'id');
        return view('admin.medicos.edit', compact('medico', 'especializacoes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $medico = User::find($id);

        $dados = $request->except(['password_confirmation','password']);
        $dados['ativo'] = $request->ativo ?? false;
        if($request->password){
            $dados['password'] = bcrypt($dados['password']);
        }

        $medico->update($dados);
        return back()->with('success', 'Medico Atualizado com sucesso!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $medico = User::find($id);

        $medico->delete();
        return back()->with('success', 'Medico Removido com sucesso!');

    }
}
