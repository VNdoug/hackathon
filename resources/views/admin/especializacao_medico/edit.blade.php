@extends('adminlte::page')

@section('title_prefix', 'Editar Fabrica')
@section('box_style', 'primary')

@section('content_header')

    <ol class="breadcrumb">
        <li>
            <i class="fa fa-tachometer"></i>
            <a href="{{route('home')}}">Início</a>
        </li>
        <li class="">
            <i class="fa fa-user-md"></i>
            <a href="{{route('fabricas.index')}}">Fabrica</a>
        </li>
        <li class="active">
            Editar Fabrica
        </li>
    </ol>
    <h1>Editar Fabrica <small>Edição da Fabrica</small></h1>
@stop

@section('content')
    <formulario titulo="Edição da Fabrica" icone="fa-pencil-square-o " box_topo="box-warning">
        {!! Form::model($fabrica, ['route' => ['fabricas.update', $fabrica], 'method' => 'PATCH']) !!}
            @include('cadastro_base.fabricas.form')
        {!! Form::close() !!}
    </formulario>
@stop
