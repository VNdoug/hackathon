@extends('adminlte::page')

@section('title_prefix', 'Nova Especialização')
@section('box_style', 'primary')

@section('content_header')

    <ol class="breadcrumb">
        <li>
            <i class="fa fa-tachometer"></i>
            <a href="#">Início</a>
        </li>
        <li class="">
            <i class="fa fa-user-md"></i>
            <a href="{{route('especializacoes.index')}}">Especializações</a>
        </li>
        <li class="active">
            Nova Especialização
        </li>
    </ol>
    <h1>Cadastro de Especialização <small>Nova Especialização</small></h1>
@stop

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-plus-circle"></i> Adicionar Especialização</h3>
        </div>

        {{ Form::open(['route' => 'especializacoes.store', 'class' => 'modal-crud']) }}
            @include('admin.especializacao_medico.form')
        {{ Form::close() }}

    </div>
@stop
