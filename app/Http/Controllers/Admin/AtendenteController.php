<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use Spatie\Permission\Models\Role;

class AtendenteController extends Controller
{
    public function index() {
        $atendentes = User::role('atendente')->latest()->get();
        return view('admin.atendentes.index', compact('atendentes'));
    }

    public function create() {
        return view('admin.atendentes.create');
    }

    public function store(Request $request) {
        $dados = $request->except('password_confirmation');

        $dados['password'] = bcrypt($dados['password']);

        User::create($dados)->assignRole('atendente');

        return back()->with('success', 'Atendente cadastrado com sucesso!');
    }

    public function edit(User $atendente) {
        return view('admin.atendentes.edit', compact('atendente'));
    }

    public function update(Request $request, User $atendente) {
        $atendente->update($request->except(['password', 'password_confirmation']));
        return back()->with('success', 'Atendente atualizado com sucesso!');
    }

    public function destroy(User $atendente) {
        $atendente->delete();
        return back()->with('success', 'Atendente excluído com sucesso!');
    }
}
