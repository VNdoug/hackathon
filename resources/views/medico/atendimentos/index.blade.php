@extends('adminlte::page')

@section('title_prefix', 'Atendimentos')
@section('box_style', 'primary')

@section('content_header')

    <ol class="breadcrumb">
        <li>
            <i class="fa fa-list"></i>
            <a href="#">Início</a>
        </li>
        <li class="active">
            Atendimentos
        </li>
    </ol>
    <h1>Lista de Atendimentos <small>Atendimentos Cadastrados</small></h1>
@stop

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"><i class="fa fa-list"></i> Atendimentos Cadastrados</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Paciente</th>
                    <th>Sintomas</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                @foreach($atendimentos  as $atendimento)
                    <tr>
                        <td>{{ $atendimento->id }}</td>
                        <td>{{ $atendimento->paciente["name"] }}</td>
                        <td>{{ $atendimento->sintomas }}</td>
                        <td class="text-center">
                            @if($atendimento->concluida)
                                <a href="{{ route('atendimentos.edit', $atendimento->id) }}" class="btn btn-flat btn-sm btn-info" data-toggle="tooltip" title="Visualizar Atendimento">
                                    <i class="fa fa-eye"></i>
                                </a>
                            @else
                                <a href="{{ route('atendimentos.edit', $atendimento->id) }}" class="btn btn-flat btn-sm btn-primary" data-toggle="tooltip" title="Atender Paciente">
                                    <i class="fa fa-heartbeat"></i>
                                </a>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->

@stop
