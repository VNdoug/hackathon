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
    <formulario titulo="Edição do Atendente" icone="fa-pencil-square-o " box_topo="box-warning">
        {!! Form::model($atendente, ['route' => ['atendentes.update', $atendente], 'method' => 'PATCH']) !!}
            @include('admin.atendentes.form')
        {!! Form::close() !!}
    </formulario>
@stop
