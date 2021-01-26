<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Familia extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero',
        'status',
        'area_id',
        'microarea_id',
        'comunidade_id',
    ];
}
