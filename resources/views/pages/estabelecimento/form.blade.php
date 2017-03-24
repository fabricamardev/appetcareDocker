{!! csrf_field() !!}
<div class="form-group">
    <label for="razao_social" class="control-label col-sm-2">Razão Social</label>
    <div class="col-sm-10">
        <input type="text" name="razao_social" id="razao_social" class="form-control" value="{{ $estabelecimento->razao_social ?? '' }}">
    </div>
</div>
<div class="form-group">
    <label for="nome_fantasia" class="control-label col-sm-2">Nome Fantasia</label>
    <div class="col-sm-10">
        <input type="text" name="nome_fantasia" id="nome_fantasia" class="form-control" value="{{ $estabelecimento->nome_fantasia ?? '' }}">
    </div>
</div>
<div class="form-group">
    <label for="endereco" class="control-label col-sm-2">Endereço</label>
    <div class="col-sm-10">
        <input type="text" name="endereco" id="endereco" class="form-control" value="{{ $estabelecimento->endereco ?? '' }}">
    </div>
</div>
<div class="form-group">
    <label for="cnpj" class="control-label col-sm-2">CNPJ</label>
    <div class="col-sm-10">
        <input type="text" name="cnpj" id="cnpj" class="form-control" value="{{ $estabelecimento->cnpj ?? '' }}">
    </div>
</div>
<div class="form-group">
    <label for="responsavel_comercial" class="control-label col-sm-2">Responsável Comercial</label>
    <div class="col-sm-10">
        <input type="text" name="responsavel_comercial" id="responsavel_comercial" class="form-control" value="{{ $estabelecimento->responsavel_comercial ?? '' }}">
    </div>
</div>
<div class="form-group">
    <label for="cpf" class="control-label col-sm-2">CPF</label>
    <div class="col-sm-10">
        <input type="text" name="cpf" id="cpf" class="form-control" value="{{ $estabelecimento->cpf ?? '' }}">
    </div>
</div>
<div class="form-group">
    <label for="responsavel_tecnico" class="control-label col-sm-2">Responsável Técnico</label>
    <div class="col-sm-10">
        <input type="text" name="responsavel_tecnico" id="responsavel_tecnico" class="form-control" value="{{ $estabelecimento->responsavel_tecnico ?? '' }}">
    </div>
</div>
<div class="form-group">
    <label for="crmv" class="control-label col-sm-2">CRMV</label>
    <div class="col-sm-10">
        <input type="text" name="crmv" id="crmv" class="form-control" value="{{ $estabelecimento->crmv ?? '' }}">
    </div>
</div>
<div class="form-group">
    <label for="site" class="control-label col-sm-2">Site</label>
    <div class="col-sm-10">
        <input type="text" name="site" id="site" class="form-control" value="{{ $estabelecimento->site ?? '' }}">
    </div>
</div>
<div class="form-group">
    <label for="email" class="control-label col-sm-2">Email</label>
    <div class="col-sm-10">
        <input type="text" name="email" id="email" class="form-control" value="{{ $estabelecimento->email ?? '' }}">
    </div>
</div>
<div class="form-group">
    <label for="telefone" class="control-label col-sm-2">Telefone</label>
    <div class="col-sm-10">
        <input type="text" name="telefone" id="telefone" class="form-control" value="{{ $estabelecimento->telefone ?? '' }}">
    </div>
</div>
<div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
        <input type="submit" value="salvar" class="btn btn-primary">
    </div>
</div>