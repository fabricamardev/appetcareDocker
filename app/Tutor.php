<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    protected $fillable = [
        'nome', 'sobrenome', 'endereco', 'numero', 'bairro', 'cidade', 'telefone'
    ];
}