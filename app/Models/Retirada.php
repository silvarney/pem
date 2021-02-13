<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Retirada extends Model
{
    use HasFactory;

    protected $fillable = [
        'quantidade',
        'paciente_id',
        'estoque_id',
        'user_id',
        'area_id',
    ];

}
