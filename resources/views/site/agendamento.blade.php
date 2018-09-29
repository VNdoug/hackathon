<!--contact-->
<section id="agendamento" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="ser-title">Informação</h2>
                <hr class="botm-line">
            </div>
            <div class="col-md-4 col-sm-4">
                <h3>Sua consulta ainda não foi agendada, preencha o formulário e aguarde que entraremos em contato com você!</h3>
            </div>
            <div class="col-md-8 col-sm-8 marb20">
                <div class="contact-info">
                    <div class="space"></div>
                    @include('vendor.adminlte.partials.messages')
                    <h3 class="cnt-ttl">Preencha o formulário e aguarde!</h3>

                    {{ Form::open(['route' => ['agendamento.store', '#agendamento'], 'class' => 'contactForm']) }}
                        @if(!Auth::check())
                        <div class="row">
                            <div class="form-group col-md-8">
                                {{ Form::label('name', 'Nome Completo') }}
                                {{ Form::text('name', null, ['class' => 'form-control br-radius-zero', 'required']) }}
                            </div>

                            <div class="form-group col-md-4">
                                {{ Form::label('telefone', 'Telefone/Celular') }}
                                {{ Form::text('telefone', null, ['class' => 'form-control br-radius-zero mask-celular', 'required']) }}
                            </div>

                        </div>

                        <div class="row">
                            <div class="form-group col-md-4">
                                {{ Form::label('cart_sus', 'Cartão do SUS') }}
                                {{ Form::text('cart_sus', null, ['class' => 'form-control br-radius-zero mask-sus', 'required']) }}
                            </div>

                            <div class="form-group col-md-4">
                                {{ Form::label('cpf', 'CPF') }}
                                {{ Form::text('cpf', null, ['class' => 'form-control br-radius-zero mask-cpf', 'required']) }}
                            </div>

                            <div class="form-group col-md-4">
                                {{ Form::label('especializacao_id', 'Tipo de Médico') }}
                                {{ Form::select('especializacao_id', $especializacoes, null, ['class' => 'form-control br-radius-zero',
                                'required', 'id' => 'select-tipo-medico', 'placeholder' => '', 'data-url-ajax' => route('ajax.medicos')]) }}
                            </div>

                        </div>

                        <div class="row">
                            <div class="form-group col-md-4">
                                {{ Form::label('medico_id', 'Médicos Disponíveis') }}
                                {{ Form::select('medico_id', [], null, ['class' => 'form-control br-radius-zero','required', 'id' => 'select-medicos', 'disabled']) }}
                            </div>

                            <div class="form-group col-md-4">
                                {{ Form::label('data_pre_agendamento', 'Dia da Consulta') }}
                                {{ Form::text('data_pre_agendamento', null, ['class' => 'form-control br-radius-zero','required', 'id' => 'datepicker']) }}
                            </div>


                            <div class="form-group col-md-4">
                                {{ Form::label('hora_pre_agendamento', 'Hora da Consulta') }}
                                {{ Form::text('hora_pre_agendamento', null, ['class' => 'form-control br-radius-zero timepicker','required',]) }}
                            </div>
                        </div>
                    @else
                        <div class="row">
                            <div class="form-group col-md-6">
                                {{ Form::label('especializacao_id', 'Tipo de Médico') }}
                                {{ Form::select('especializacao_id', $especializacoes, null, ['class' => 'form-control br-radius-zero',
                                'required', 'id' => 'select-tipo-medico', 'placeholder' => '', 'data-url-ajax' => route('ajax.medicos')]) }}
                            </div>

                            <div class="form-group col-md-6">
                                {{ Form::label('medico_id', 'Médicos Disponíveis') }}
                                {{ Form::select('medico_id', [], null, ['class' => 'form-control br-radius-zero','required', 'id' => 'select-medicos', 'disabled']) }}
                            </div>

                        </div>

                        <div class="row">

                            <div class="form-group col-md-6">
                                {{ Form::label('data_pre_agendamento', 'Dia da Consulta') }}
                                {{ Form::text('data_pre_agendamento', null, ['class' => 'form-control br-radius-zero','required', 'id' => 'datepicker']) }}
                            </div>


                            <div class="form-group col-md-6">
                                {{ Form::label('hora_pre_agendamento', 'Hora da Consulta') }}
                                {{ Form::text('hora_pre_agendamento', null, ['class' => 'form-control br-radius-zero timepicker','required',]) }}
                            </div>
                        </div>
                        @endif

                        <div class="form-group">
                            {{ Form::label('sintomas', 'Fale um pouco do que você precisa') }}
                            {{ Form::textarea('sintomas', null, ['class'=>'form-control br-radius-zero', 'required']) }}
                        </div>

                        <div class="form-action">
                            <span class="pull-left">
                            {!! Form::captcha() !!}
                            </span>
                            <button type="submit" class="btn btn-form pull-right"><i class="fa fa-check-circle"></i> Confirmar Consulta</button>
                        </div>
                    {{ Form::close() }}
                    {{--</form>--}}
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ contact-->