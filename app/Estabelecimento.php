<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estabelecimento extends Model
{
    protected $fillable = [
        'razao_social', 'nome_fantasia', 'endereco', 'cnpj', 'responsavel_comercial', 'cpf', 
        'responsavel_tecnico', 'crmv', 'site', 'email', 'telefone'
    ];
}