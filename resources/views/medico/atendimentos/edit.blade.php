@extends('adminlte::page')

@section('title_prefix', 'Atendimento')
@section('box_style', 'primary')

@section('content_header')

    <ol class="breadcrumb">
        <li>
            <i class="fa fa-tachometer"></i>
            <a href="#">Início</a>
        </li>
        <li class="">
            <i class="fa fa-user-md"></i>
            <a href="{{route('atendimentos.index')}}">Atendimentos</a>
        </li>
        <li class="active">
            Novo Atendimento
        </li>
    </ol>
    <h1>Atendimento do Paciente <small>Novo Atendimento</small></h1>
@stop
@section('content')
    <div class="box box-warning">
        <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-user-plus"></i> Atendendo o Paciente {{ $atendimento->paciente["name"] }}</h3>
        </div>

        {!! Form::model($atendimento, ['route' => ['atendimentos.update', $atendimento], 'method' => 'PATCH']) !!}
            @include('medico.atendimentos.form')
        {!! Form::close() !!}

    </div>
@stop
