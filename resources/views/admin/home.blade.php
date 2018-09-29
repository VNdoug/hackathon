@extends('adminlte::page')

@section('title_prefix', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-4 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>{{$consultasConfirmadas}}</h3>

                    <p>Consultas Confirmadas</p>
                </div>
                <div class="icon">
                    <i class="ion ion-calendar"></i>
                </div>
                {{-- <a href="#" class="small-box-footer">Mais Informações <i class="fa fa-arrow-circle-right"></i></a> --}}
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>{{$consultasConcluidas}}</h3>

                    <p>Consultas Realizadas</p>
                </div>
                <div class="icon">
                    <i class="ion ion-checkmark"></i>
                </div>
                {{-- <a href="#" class="small-box-footer">Mais Informações <i class="fa fa-arrow-circle-right"></i></a> --}}
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3>{{$consultasPendentes}}</h3>

                    <p>Consultas Pendentes</p>
                </div>
                <div class="icon">
                    <i class="ion ion-clock"></i>
                </div>
                {{-- <a href="#" class="small-box-footer">Mais Informações <i class="fa fa-arrow-circle-right"></i></a> --}}
            </div>
        </div>

    </div>
    <!-- /.row -->

    <!-- Main row -->
    <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">
            <!-- Calendar -->
            <div class="box box-solid bg-green-gradient">
                <div class="box-header">
                    <i class="fa fa-calendar"></i>

                    <h3 class="box-title">Calendar</h3>
                    <!-- tools box -->
                    <div class="pull-right box-tools">
                        <!-- button with a dropdown -->
                       {{--  <div class="btn-group">
                            <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bars"></i></button>
                            <ul class="dropdown-menu pull-right" role="menu">
                                <li><a href="#">Add new event</a></li>
                                <li><a href="#">Clear events</a></li>
                                <li class="divider"></li>
                                <li><a href="#">View calendar</a></li>
                            </ul>
                        </div> --}}
                        <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                        </button>
                    </div>
                    <!-- /. tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <!--The calendar -->
                    <div id="calendar" style="width: 100%"></div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-black">
                    <div class="row">
                        {{-- @foreach ($medicos->chunk(2) as $chunk)
                            <div class="col-sm-6">
                                @foreach ($chunk as $medico)
                                    <div class="clearfix">
                                        <span class="pull-left">{{$medico->name}}</span>
                                        <small class="pull-right">9</small>
                                    </div>
                                    <div class="progress xs">
                                        <div class="progress-bar progress-bar-green" style="width: 90%;"></div>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach --}}
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
            </div>
            <!-- /.box -->
        </section>
        <!-- /.Left col -->
        



        </section>
        <!-- right col -->
    </div>
    <!-- /.row (main row) -->
@stop