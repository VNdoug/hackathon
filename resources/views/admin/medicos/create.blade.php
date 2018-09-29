@extends('adminlte::page')

@section('title_prefix', 'Novo Médico')
@section('box_style', 'primary')

@section('content_header')

    <ol class="breadcrumb">
        <li>
            <i class="fa fa-tachometer"></i>
            <a href="#">Início</a>
        </li>
        <li class="">
            <i class="fa fa-user-md"></i>
            <a href="{{route('especializacoes.index')}}">Médicos</a>
        </li>
        <li class="active">
            Novo Médico
        </li>
    </ol>
    <h1>Cadastro de Médico <small>Novo Médico</small></h1>
@stop

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-plus-circle"></i> Adicionar Médico</h3>
        </div>

        {{ Form::open(['route' => 'medicos.store', 'class' => 'modal-crud']) }}
            @include('admin.medicos.form')
        {{ Form::close() }}

    </div>
@stop
