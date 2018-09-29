<div class="box-body">
    <div class="row">
        <div class="form-group col-md-6">
            {{ Form::label('data_pre_agendamento', 'Data da Consulta') }}
            <div class="input-group date">
                <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </div>
                {{ Form::text('data_pre_agendamento',  $agendamento->data_pre_agendamento->format('d/m/Y'), ['class' => 'form-control pull-right', 'id' => 'datepicker']) }}
            </div>
        </div>

        <div class="bootstrap-timepicker col-md-6">
            <div class="form-group">
                {{ Form::label('hora_pre_agendamento', 'Hora da Consulta') }}
                <div class="input-group">
                    {{ Form::text('hora_pre_agendamento',  old('hora_pre_agendamento'), ['class' => 'form-control timepicker']) }}


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
            {{Form::checkbox('confirmada', 1, $agendamento->confirmada)}}
            Confirmar Consulta para esta data?
        </label>
    </div>

</div>
<!-- /.box-body -->

<div class="box-footer">
    <a href="{{ route('agendamentos.index') }}" class="btn btn-default btn-flat"><i class="fa fa-arrow-left"></i> Voltar</a>
    <button type="submit" class="btn btn-success btn-flat pull-right"><i class="fa fa-check-circle"></i> Salvar Agendamento</button>
</div>

