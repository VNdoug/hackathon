@extends('adminlte::page')

@section('title_prefix', 'Editar Atendente')
@section('box_style', 'primary')

@section('content_header')
    <ol class="breadcrumb">
        <li>
            <i class="fa fa-tachometer"></i>
            <a href="#">Início</a>
        </li>
        <li class="">
            <i class="fa fa-user-md"></i>
            <a href="{{route('atendentes.index')}}">Atendente</a>
        </li>
        <li class="active">
            Editar Atendente
        </li>
    </ol>
    <h1>Editar Atendente <small>Edição do Atendente</small></h1>
@stop

@section('content')

    <div class="box box-warning">
        <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-pencil-square-o"></i> Edição do Atendente</h3>
        </div>

        {!! Form::model($atendente, ['route' => ['atendentes.update', $atendente], 'method' => 'PATCH']) !!}
        @include('admin.atendentes.form')
        {!! Form::close() !!}

    </div>
@stop
