@extends('adminlte::page')

@section('title_prefix', 'Atendentes')
@section('box_style', 'primary')

@section('content_header')

    <ol class="breadcrumb">
        <li>
            <i class="fa fa-list"></i>
            <a href="#">Início</a>
        </li>
        <li class="active">
            Atendentes
        </li>
    </ol>
    <h1>Lista de Atendentes <small>Atendentes Cadastrados</small></h1>
@stop

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"><i class="fa fa-list"></i> Atendentes Cadastrados</h3>
            <div>
                <br>
                <a href="{{ route('atendentes.create') }}" class="btn btn-primary btn-flat">
                    <i class="fa fa-plus-circle"></i>
                    Adicionar Atendente
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
                    <th>E-mail</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                @foreach($atendentes  as $atendente)
                    <tr>
                        <td>{{ $atendente->id }}</td>
                        <td>{{ $atendente->name }}</td>
                        <td>{{ $atendente->email }}</td>
                        <td class="text-center">
                            <a href="{{ route('atendentes.edit', $atendente) }}" class="btn btn-flat btn-sm btn-warning" data-toggle="tooltip" title="Editar">
                                <i class="fa fa-pencil"></i>
                            </a>

                            {!! Form::open(['route' => ['atendentes.destroy', $atendente], 'method' => 'DELETE']) !!}
                                <button type="button" class="delete btn btn-sm btn-flat btn-danger delete" data-toggle="tooltip" title="Excluir">
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
