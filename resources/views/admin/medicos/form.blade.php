<div class="box-body">
    <div class="row">
        <div class="form-group form-required col-md-5">
            {{ Form::label('name', 'Nome') }}
            {{ Form::text('name', old('name'), ['class' => 'form-control', 'autofocus', 'required']) }}
        </div>

        <div class="form-group form-required col-md-2">
            {{ Form::label('crm', 'CRM') }}
            {{ Form::text('crm', old('crm'), ['class' => 'form-control', 'required']) }}
        </div>

        <div class="form-group fomr-required col-md-5">
            {{ Form::label('especializacao_id', 'Especialização do Médico') }}
            {{Form::select('especializacao_id', $especializacoes, old('especializacao_id'), ['class' => 'form-control select2', "required",
             'placeholder' => 'Selecione uma opção...'])}}
        </div>
    </div>

    <div class="row">
        <div class="form-group form-required col-md-4">
            {{ Form::label('email', 'E-mail') }}
            {{ Form::email('email', old('email'), ['class' => 'form-control', 'required']) }}
        </div>
        @isset($medico)
            <div class="form-group form-required col-md-4">
                {{ Form::label('password', 'Senha') }}
                {{ Form::password('password', ['class' => 'form-control']) }}
            </div>

            <div class="form-group form-required col-md-4">
                {{ Form::label('password_confirmation', 'Confirmar Senha') }}
                {{ Form::password('password_confirmation', ['class' => 'form-control']) }}
            </div>
        @else
                <div class="form-group form-required col-md-4">
                    {{ Form::label('password', 'Senha') }}
                    {{ Form::password('password', ['class' => 'form-control', 'required']) }}
                </div>

                <div class="form-group form-required col-md-4">
                    {{ Form::label('password_confirmation', 'Confirmar Senha') }}
                    {{ Form::password('password_confirmation', ['class' => 'form-control', 'required']) }}
                </div>
        @endisset

    </div>

    <div class="checkbox">
        @isset($medico)
        <label>
            {{Form::checkbox('ativo', 1, $medico->ativo)}}
            Médico ativo
        </label>
        @endisset
    </div>
</div>
<!-- /.box-body -->

<div class="box-footer">
    <a href="{{ route('medicos.index') }}" class="btn btn-default btn-flat"><i class="fa fa-arrow-left"></i> Voltar</a>
    <button type="submit" class="btn btn-success btn-flat pull-right"><i class="fa fa-save"></i> Salvar</button>
</div>
