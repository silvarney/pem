<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comorbidade extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo',
        'doenca',
        'paciente_id',
        'user_id',
        'area_id',
    ];
}
