@extends('adminlte::page')

@section('title_prefix', 'Editar Fabrica')
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
            Editar Especialização
        </li>
    </ol>
    <h1>Editar Especialização <small>Edição da Especialização</small></h1>
@stop

@section('content')
    <div class="box box-warning">
        <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-plus-circle"></i> Editar Especialização</h3>
        </div>

        {{ Form::model($especializacaoMedico,['route' => ['especializacoes.update',$especializacaoMedico], 'class' => 'modal-crud', 'method' => 'PATCH']) }}
            @include('admin.especializacao_medico.form')
        {{ Form::close() }}

    </div>
@stop
