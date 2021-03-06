<div class="box-body">
        <div class="form-group form-required">
            {{ Form::label('descricao', 'Especialização') }}
            {{ Form::text('descricao', old('descricao'), ['class' => 'form-control', 'autofocus', 'required']) }}
        </div>

        <div class="checkbox">
            @isset($especializacaoMedico)
            <label>
                {{Form::checkbox('ativo', 1, $especializacaoMedico->ativo)}}
                Especialização ativa
            </label>
            @endisset
        </div>
</div>
<!-- /.box-body -->

<div class="box-footer">
    <a href="{{ route('especializacoes.index') }}" class="btn btn-default btn-flat"><i class="fa fa-arrow-left"></i> Voltar</a>
    <button type="submit" class="btn btn-success btn-flat pull-right"><i class="fa fa-save"></i> Salvar</button>
</div>
