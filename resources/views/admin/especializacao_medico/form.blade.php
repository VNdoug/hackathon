<div class="box-body">
    <div class="row">
        <div class="col-md-4">
            @include('formulario.text',['nome_campo' => 'nome', 'label_campo' => 'Nome',
            'required' => 'required', 'classes' => 'form-required'])
        </div>
        <div class="col-md-4">
            @include('formulario.text',['nome_campo' => 'razao_social', 'label_campo' => 'Razão Social'])
        </div>
        <div class="col-md-4">
            @include('formulario.text',['nome_campo' => 'cnpj', 'label_campo' => 'CNPJ', 'required' => 'required',
            'classes' => 'form-required', 'mascara' => 'mask-cnpj'])
        </div>
    </div>

    @isset($fabrica)
        <label>
            {{Form::checkbox('ativo', 1, $fabrica->ativo)}}
            Fabrica ativa
        </label>
    @endisset
</div>
<!-- /.box-body -->

@include('formulario.footer', ['retorno' => route('fabricas.index')])