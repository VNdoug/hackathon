@extends('site.master')

@section('content')
<section id="about" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="contact-info">
                    <h3 class="cnt-ttl">Acesso ao Histórico de Consultas</h3>
                    <div class="space"></div>
                    {{ Form::open(['route' => ['site.login.auth', '#agendamento'], 'class' => 'contactForm']) }}
                        <div class="form-group">
                            {{ Form::label('email', 'E-mail') }}
                            {{ Form::email('email', null, ['class' => 'form-control br-radius-zero', 'required']) }}
                        </div>

                        <div class="form-group">
                            {{ Form::label('password', 'Senha') }}
                            {{ Form::password('password', ['class' => 'form-control br-radius-zero', 'required']) }}
                        </div>

                        <div class="form-action">
                            <button type="submit" class="btn btn-form"><i class="fa fa-unlock"></i> Entrar</button>
                        </div>

                    {{ Form::close() }}

                    {{--<form action="" method="post" role="form" class="contactForm">--}}
                        {{--<div class="form-group">--}}
                            {{--<input type="text" name="name" class="form-control br-radius-zero" id="name" placeholder="E-mail" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />--}}
                            {{--<div class="validation"></div>--}}
                        {{--</div>--}}
                        {{--<div class="form-group">--}}
                            {{--<input type="email" class="form-control br-radius-zero" name="email" id="email" placeholder="Senha" data-rule="email" data-msg="Please enter a valid email" />--}}
                            {{--<div class="validation"></div>--}}
                        {{--</div>--}}
                        {{--<div class="form-action">--}}
                            {{--<button type="submit" class="btn btn-form">Entrar</button>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection