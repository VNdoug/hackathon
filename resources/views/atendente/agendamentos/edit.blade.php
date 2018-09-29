@extends('adminlte::page')

@section('title_prefix', 'Confirmar Agendamento')
@section('box_style', 'primary')

@section('content_header')

    <ol class="breadcrumb">
        <li>
            <i class="fa fa-tachometer"></i>
            <a href="#">Início</a>
        </li>
        <li class="">
            <i class="fa fa-user-md"></i>
            <a href="{{route('agendamentos.index')}}">Agendamentos</a>
        </li>
        <li class="active">
            Confimação do Agendamento
        </li>
    </ol>
    <h1>Agendamento de Consulta <small>Confimação de Agendamento</small></h1>
@stop
@section('content')
    <div class="box box-warning">
        <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-calendar-o"></i> Agendando Consulta</h3>
        </div>

        {!! Form::model($agendamento, ['route' => ['agendamentos.update', $agendamento], 'method' => 'PATCH']) !!}
            @include('atendente.agendamentos.form')
        {!! Form::close() !!}

    </div>
@stop
