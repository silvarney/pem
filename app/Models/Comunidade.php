<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comunidade extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'status',
        'area_id',
        'microarea_id',
    ];
}
