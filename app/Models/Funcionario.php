<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'nascimento',
        'sexo',
        'raca',
        'pai',
        'mae',
        'naturalidade',
        'fone',
        'rg',
        'cpf',
        'funcao',
        'registro',
        'status',
        'bairro',
        'cidade',
        'cidade',
        'estado',
        'cep',
        'logradouro',
        'descricao',
        'numero',
        'complemento',
        'area_id',
    ];
}
