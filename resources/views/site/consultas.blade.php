@extends('site.master')

@section('content')
    <section id="about" class="section-padding">
        <div class="container">
            <div class="row">
                @foreach($consultas as $consulta)
                    <div class="col-md-12">
                        <h2 class="ser-title">Minhas Consultas!</h2>
                        <hr class="botm-line">
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="thumbnail">
                            <img src="{{ asset('template/img/doctor1.jpg') }}" alt="..." class="team-img">
                            <div class="caption">
                                <h3>{{ $consulta->medico->name }}</h3>
                                <p>Doctor</p>
                                <ul class="list-inline">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-8 col-xs-12">
                        <div style="visibility: visible;" class="col-sm-9 more-features-box">
                            <div class="more-features-box-text">
                                <div class="more-features-box-text-icon"> <i class="fa fa-stethoscope" aria-hidden="true"></i> </div>
                                <div class="more-features-box-text-description">
                                    <h3>Consulta do dia {{ $consulta->data_formatada_consulta }}</h3>
                                    <hr>
                                    <h4>Sintomas</h4>
                                    <p>{{ $consulta->sintomas }}</p>
                                    @if($consulta->avaliacao_medica)
                                        <hr>
                                        <h4>Avaliação Médica</h4>
                                        <p>{{ $consulta->avaliacao_medica }}</p>
                                    @endif
                                    @if($consulta->receita)
                                        <hr>
                                        <h4>Receita</h4>
                                        <p>{{ $consulta->receita }}</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection