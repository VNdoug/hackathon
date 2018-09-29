@extends('adminlte::page')

@section('title_prefix', 'Agendamentos')
@section('box_style', 'primary')

@section('content_header')

    <ol class="breadcrumb">
        <li>
            <i class="fa fa-list"></i>
            <a href="#">Início</a>
        </li>
        <li class="active">
            Agendamentos
        </li>
    </ol>
    <h1>Lista de Agendamentos <small>Agendamentos Cadastrados</small></h1>
@stop

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"><i class="fa fa-list"></i> Agendamentos Cadastrados</h3>
            <div>
                <br>
                {{-- <a href="{{ route('medicos.create') }}" class="btn btn-primary btn-flat">
                    <i class="fa fa-plus-circle"></i>
                    Adicionar Médico
                </a> --}}
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div id="calendar"></div>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
@stop
