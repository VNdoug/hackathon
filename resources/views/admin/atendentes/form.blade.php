<div class="box-body">
    <div class="form-group">
        {{ Form::label('name', 'Nome') }}
        {{ Form::text('name', null, ['class' => 'form-control form-required', 'required']) }}
    </div>
    <div class="form-group">
        {{ Form::label('email', 'E-mail') }}
        {{ Form::email('email', null, ['class' => 'form-control form-required', 'required']) }}
    </div>

    @if (!isset($atendente))
        <div class="form-group">
            {{ Form::label('password', 'Senha') }}
            {{ Form::password('password', ['class' => 'form-control form-required', 'required']) }}
        </div>
        <div class="form-group">
            {{ Form::label('password_confirmation', 'Confirme a senha') }}
            {{ Form::password('password_confirmation', ['class' => 'form-control form-required', 'required']) }}
        </div>
    @endif
</div>
<!-- /.box-body -->

<div class="box-footer">
    <a href="{{ route('atendentes.index') }}" class="btn btn-default btn-flat"><i class="fa fa-arrow-left"></i> Voltar</a>
    <button type="submit" class="btn btn-success btn-flat pull-right"><i class="fa fa-save"></i> Salvar</button>
</div>
