<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
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
        'cartao',
        'prontuario',
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
        'microarea_id',
        'comunidade_id',
        'familia_id',
        'user_id'
    ];
}
