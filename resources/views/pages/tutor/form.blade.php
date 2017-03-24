{!! csrf_field() !!}
<div class="form-group">
    <label for="nome" class="control-label col-sm-2">Nome</label>
    <div class="col-sm-10">
        <input type="text" name="nome" id="nome" class="form-control" value="{{ $tutor->nome ?? '' }}">
    </div>
</div>
<div class="form-group">
    <label for="sobrenome" class="control-label col-sm-2">Sobrenome</label>
    <div class="col-sm-10">
        <input type="text" name="sobrenome" id="sobrenome" class="form-control" value="{{ $tutor->sobrenome ?? '' }}">
    </div>
</div>
<div class="form-group">
    <label for="endereco" class="control-label col-sm-2">Endereço</label>
    <div class="col-sm-10">
        <input type="text" name="endereco" id="endereco" class="form-control" value="{{ $tutor->endereco ?? '' }}">
    </div>
</div>
<div class="form-group">
    <label for="numero" class="control-label col-sm-2">Numero</label>
    <div class="col-sm-10">
        <input type="text" name="numero" id="numero" class="form-control" value="{{ $tutor->numero ?? '' }}">
    </div>
</div>
<div class="form-group">
    <label for="bairro" class="control-label col-sm-2">Bairro</label>
    <div class="col-sm-10">
        <input type="text" name="bairro" id="bairro" class="form-control" value="{{ $tutor->bairro ?? '' }}">
    </div>
</div>
<div class="form-group">
    <label for="cidade" class="control-label col-sm-2">Cidade</label>
    <div class="col-sm-10">
        <input type="text" name="cidade" id="cidade" class="form-control" value="{{ $tutor->cidade ?? '' }}">
    </div>
</div>
<div class="form-group">
    <label for="telefone" class="control-label col-sm-2">Telefone</label>
    <div class="col-sm-10">
        <input type="text" name="telefone" id="telefone" class="form-control" value="{{ $tutor->telefone ?? '' }}">
    </div>
</div>
<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
        <input type="submit" value="salvar" class="btn btn-primary">
    </div>
</div>