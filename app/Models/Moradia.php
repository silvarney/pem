<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moradia extends Model
{
    use HasFactory;

    protected $fillable = [
        'item',
        'quantidade',
        'inserido',
        'user_id',
        'area_id',
    ];
}
