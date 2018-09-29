<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'auth'], function() {
	Route::get('', 'HomeController@index');
	Route::resource('/atendentes', 'AtendenteController');
	Route::resource('/medicos', 'MedicoController')->except('show');
	Route::resource('/especializacoes', 'EspecializacaoMedicoController',[
        'parameters' => [
            'especializacoes' => 'especializacaoMedico'

        ]
    ])->except('show');
});

Route::group(['namespace' => 'Medico', 'prefix' => 'admin', 'middleware' => 'auth'], function() {

Route::resource('/atendimentos', 'AtendimentoController');
});

