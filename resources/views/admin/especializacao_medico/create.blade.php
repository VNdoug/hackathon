@extends('adminlte::page')

@section('title_prefix', 'Nova Especialização')
@section('box_style', 'primary')

@section('content_header')

    <ol class="breadcrumb">
        <li>
            <i class="fa fa-tachometer"></i>
            <a href="#">Início</a>
        </li>
        <li class="">
            <i class="fa fa-user-md"></i>
            <a href="{{route('especializacoes.index')}}">Especializações</a>
        </li>
        <li class="active">
            Nova Especialização
        </li>
    </ol>
    <h1>Cadastro de Especialização <small>Nova Especialização</small></h1>
@stop

@section('content')
    {{--<formulario titulo="Cadastro de Fabrica" icone="fa-plus-circle" box_topo="box-success">--}}
        {{--{{ Form::open(['route' => 'fabricas.store', 'class' => 'modal-crud']) }}--}}
{{--            @include('cadastro_base.fabricas.form')--}}
        {{--{{ Form::close() }}--}}
    {{--</formulario>--}}
@stop
