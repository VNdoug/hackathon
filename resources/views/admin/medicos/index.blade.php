@extends('adminlte::page')

@section('title_prefix', 'Médicos')
@section('box_style', 'primary')

@section('content_header')

    <ol class="breadcrumb">
        <li>
            <i class="fa fa-list"></i>
            <a href="#">Início</a>
        </li>
        <li class="active">
            Médicos
        </li>
    </ol>
    <h1>Lista de Médicos <small>Médicos Cadastrados</small></h1>
@stop

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"><i class="fa fa-list"></i> Médicos Cadastrados</h3>
            <div>
                <br>
                <a href="{{ route('medicos.create') }}" class="btn btn-primary btn-flat">
                    <i class="fa fa-plus-circle"></i>
                    Adicionar Médico
                </a>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>CRM</th>
                    <th>Especialização</th>
                    <th>Ativo</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                @foreach($medicos  as $medico)
                    <tr>

                        <td>{{ $medico->id }}</td>
                        <td>{{ $medico->name }}</td>
                        <td>{{ $medico->crm }}</td>
                        <td>{{ $medico->especializacao["descricao"] }}</td>
                        <td class="text-center">
                            @if($medico->ativo == 1)
                                <span class="label bg-green">Sim</span>
                            @else
                                <span class="label bg-red">Não</span>
                            @endif
                        </td>
                        <td class="text-center">
                            {!! Form::open(['route' => ['medicos.destroy', $medico], 'method' => 'DELETE']) !!}
                            <a href="{{ route('medicos.edit', $medico) }}" class="btn btn-flat btn-sm btn-warning" data-toggle="tooltip" title="Editar">
                                <i class="fa fa-pencil"></i>
                            </a>

                            <button type="submit" class="delete btn btn-sm btn-flat btn-danger delete" data-toggle="tooltip" title="Excluir">
                                <i class="fa fa-trash"></i>
                            </button>
                            {!! Form::close() !!}
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
