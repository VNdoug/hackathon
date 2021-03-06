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

Route::get('/', 'HomeController@index')->name('site.home');
Route::post('/', 'HomeController@store')->name('agendamento.store');
Route::post('/ajax/medicos', 'HomeController@ajaxMedicos')->name('ajax.medicos');
Route::get('/site/login', 'HomeController@login')->name('site.login');
Route::post('/site/login', 'HomeController@auth')->name('site.login.auth');
Route::get('/site/consultas', 'HomeController@consultas')->name('site.consultas');

Auth::routes();

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'auth'], function() {
	Route::get('', 'HomeController@index')->name('admin.home');
	Route::resource('/atendentes', 'AtendenteController');
	Route::resource('/medicos', 'MedicoController')->except('show');
	Route::resource('/especializacoes', 'EspecializacaoMedicoController',[
        'parameters' => [
            'especializacoes' => 'especializacaoMedico'

        ]
    ])->except('show');
});

Route::group(['namespace' => 'Atendente', 'prefix' => 'atendente', 'middleware' => 'auth'], function() {
	Route::resource('agendamentos', 'AgendamentoController');
    Route::get('/confirmar/agendamento/{agendamento}', 'AgendamentoController@confrimaAgendamento')->name('confirmar.agendamento');
    Route::put('/confirmar/agendamento/{agendamento}', 'AgendamentoController@update')->name('atualiza.agendamento.confirmado');


});

Route::group(['prefix' => 'ajax', 'middleware' => 'auth'], function() {

	Route::group(['namespace' => 'Atendente', 'prefix' => 'atendente', 'middleware' => 'auth'], function() {
		Route::get('agendamentos', 'AgendamentoController@ajaxGet');
	});

	Route::group(['namespace' => 'Medico', 'prefix' => 'medico', 'middleware' => 'auth'], function() {
		Route::get('consultas', 'AgendamentoController@ajaxGet');
	});
});

Route::group(['namespace' => 'Medico', 'prefix' => 'medico', 'middleware' => 'auth'], function() {
	Route::resource('/consultas', 'AgendamentoController');

	Route::resource('/atendimentos', 'AtendimentoController');
});

