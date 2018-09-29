@extends('adminlte::page')

@section('title_prefix', 'Consultas')
@section('box_style', 'primary')

@section('content_header')

    <ol class="breadcrumb">
        <li>
            <i class="fa fa-list"></i>
            <a href="#">Início</a>
        </li>
        <li class="active">
            Consultas
        </li>
    </ol>
    <h1>Lista de Consultas <small>Consultas Cadastradas</small></h1>
@stop

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"><i class="fa fa-list"></i> Consultas Cadastradas</h3>
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
            <div id="calendar-medico"></div>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
@stop
