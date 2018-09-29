<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Agendamento;
use App\User;

use Carbon\CarbonPeriod;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index() {
    	$medicos = User::medicos()->get();

    	$consultasConfirmadas = Agendamento::confirmadas()->count();
    	$consultasConcluidas = Agendamento::concluidas()->count();
    	$consultasPendentes = Agendamento::pendentes()->count();

    	$periodo = CarbonPeriod::create(now()->subDays(30), now());
    	$agendamentos = Agendamento::concluidas()->get();

    	$arrayDias = [];
    	$arrayDados = [];
    	foreach ($periodo as $key => $data) {
    	    $arrayDias[$key] = $data->format('d/m/Y');
    	    $arrayDados[$key] = $agendamentos->where('data_string', $data->toDateString())->count();
    	}
    	// dd($arrayDados);
    	$arrayDias = json_encode($arrayDias);
    	$arrayDados = json_encode($arrayDados);

    	return view('admin.home', compact('medicos', 'consultasConfirmadas', 'consultasConcluidas', 'consultasPendentes', 'arrayDias', 'arrayDados'));
    }
}
