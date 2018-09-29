<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Agendamento;
use App\User;

class HomeController extends Controller
{
    public function index() {
    	$medicos = User::medicos()->get();

    	$consultasConfirmadas = Agendamento::confirmadas()->count();
    	$consultasConcluidas = Agendamento::concluidas()->count();
    	$consultasPendentes = Agendamento::pendentes()->count();
    	return view('admin.home', compact('medicos', 'consultasConfirmadas', 'consultasConcluidas', 'consultasPendentes'));
    }
}
