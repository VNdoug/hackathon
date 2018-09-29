@extends('adminlte::page')

@section('title_prefix', 'Editar Médico')
@section('box_style', 'primary')

@section('content_header')

    <ol class="breadcrumb">
        <li>
            <i class="fa fa-tachometer"></i>
            <a href="#">Início</a>
        </li>
        <li class="">
            <i class="fa fa-user-md"></i>
            <a href="{{route('medicos.index')}}">Medicos</a>
        </li>
        <li class="active">
            Editar Médico
        </li>
    </ol>
    <h1>Editar Médico <small>Edição do Médico</small></h1>
@stop

@section('content')
    <div class="box box-warning">
        <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-plus-circle"></i> Editar Médico</h3>
        </div>

        {{ Form::model($medico,['route' => ['medicos.update',$medico], 'class' => 'modal-crud', 'method' => 'PATCH']) }}
            @include('admin.medicos.form')
        {{ Form::close() }}

    </div>
@stop
