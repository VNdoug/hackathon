@extends('adminlte::page')

@section('title_prefix', 'Especialização dos Médicos')
@section('box_style', 'primary')

@section('content_header')

    <ol class="breadcrumb">
        <li>
            <i class="fa fa-list"></i>
            <a href="#">Início</a>
        </li>
        <li class="active">
            Especializações
        </li>
    </ol>
    <h1>Lista de Especializações <small>Especializações Cadastradas</small></h1>
@stop

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title"><i class="fa fa-list"></i> Especializações Cadastradas</h3>
            <div>
                <br>
                <a href="{{ route('especializacoes.create') }}" class="btn btn-primary btn-flat">
                    <i class="fa fa-plus-circle"></i>
                    Adicionar Especialização
                </a>
            </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Descricao</th>
                    <th>Ativo</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                @foreach($especializacoes  as $especializacao)
                    <tr>

                        <td>{{ $especializacao->id }}</td>
                        <td>{{ $especializacao->descricao }}</td>
                        <td class="text-center">
                            @if($especializacao->ativo == 1)
                                <span class="label bg-green">Sim</span>
                            @else
                                <span class="label bg-red">Não</span>
                            @endif
                        </td>
                        <td class="text-center">
                            {!! Form::open(['route' => ['especializacoes.destroy', $especializacao], 'method' => 'DELETE']) !!}
                            <a href="{{ route('especializacoes.edit', $especializacao) }}" class="btn btn-flat btn-sm btn-warning" data-toggle="tooltip" title="Editar">
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
