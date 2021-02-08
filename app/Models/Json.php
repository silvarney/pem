<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Json extends Model
{
    use HasFactory;

    public function estados()
    {
        $path = storage_path() . "/json/estados.json";

        $dados = json_decode(file_get_contents($path), true); 

        return $dados;
    }

    public function cidades()
    {
        $path = storage_path() . "/json/cidades.json";

        $dados = json_decode(file_get_contents($path), true); 

        return $dados;
    }

    public function acompanhamentos()
    {
        $path = storage_path() . "/json/acompanhamentos.json";

        $dados = json_decode(file_get_contents($path), true); 

        return $dados;
    }

    public function comorbidade()
    {
        $path = storage_path() . "/json/comorbidade.json";

        $dados = json_decode(file_get_contents($path), true); 

        return $dados;
    }
}
