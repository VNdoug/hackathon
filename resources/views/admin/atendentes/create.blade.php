@extends('adminlte::page')

@section('title_prefix', 'Novo Atendente')
@section('box_style', 'primary')

@section('content_header')

    <ol class="breadcrumb">
        <li>
            <i class="fa fa-tachometer"></i>
            <a href="#">Início</a>
        </li>
        <li class="">
            <i class="fa fa-user-md"></i>
            <a href="{{route('atendentes.index')}}">Atendentes</a>
        </li>
        <li class="active">
            Novo Atendente
        </li>
    </ol>
    <h1>Cadastro de Atendente <small>Novo Atendente</small></h1>
@stop

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-plus-circle"></i> Adicionar Atendente</h3>
        </div>

        {{ Form::open(['route' => 'atendentes.store', 'class' => 'modal-crud']) }}
            @include('admin.atendentes.form')
        {{ Form::close() }}

    </div>
@stop
