<div class="box-body">
    <div class="form-group form-required">
        {{ Form::label('sintomas', 'Sintomas do Paciente') }}
        {{ Form::textarea('sintomas', old('sintomas'), ['class' => 'form-control', 'disabled']) }}
    </div>

    <div class="form-group form-required">
        {{ Form::label('avaliacao_medica', 'Avaliação do Paciente') }}
        {{ Form::textarea('avaliacao_medica',  old('avaliacao_medica'), ['class' => 'form-control', 'required', $atendimento->concluida ? 'disabled':'']) }}
    </div>

    <div class="form-group form-required">
        {{ Form::label('receita', 'Receita para o Paciente') }}
        {{ Form::textarea('receita',  old('receita'), ['class' => 'form-control', 'required', $atendimento->concluida ? 'disabled':'']) }}
    </div>

    <div class="row">
        <div class="form-group col-md-6">
            {{ Form::label('data_retorno', 'Data do Retorno') }}
            <div class="input-group date">
                <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </div>
                {{ Form::text('data_retorno', isset($atendimento->data_retorno) ? $atendimento->data_retorno->format('d/m/Y'):null, ['class' => 'form-control pull-right', 'id' => 'datepicker']) }}
            </div>
        </div>

        <div class="bootstrap-timepicker col-md-6">
            <div class="form-group">
                {{ Form::label('hora_retorno', 'Hora do Retorno') }}
                <div class="input-group">
                    {{ Form::text('hora_retorno',  old('hora_retorno'), ['class' => 'form-control timepicker']) }}


                    <div class="input-group-addon">
                        <i class="fa fa-clock-o"></i>
                    </div>
                </div>
                <!-- /.input group -->
            </div>
            <!-- /.form group -->
        </div>
    </div>

    <div class="checkbox">
        <label>
            {{Form::checkbox('concluida', 1, $atendimento->concluida)}}
            Consulta Concluida
        </label>
    </div>

</div>
<!-- /.box-body -->

<div class="box-footer">
    <a href="{{ route('atendimentos.index') }}" class="btn btn-default btn-flat"><i class="fa fa-arrow-left"></i> Voltar</a>
    @if(!$atendimento->concluida)
        <button type="submit" class="btn btn-success btn-flat pull-right"><i class="fa fa-check-circle"></i> Finalizar Atendimento</button>
    @endif
</div>

