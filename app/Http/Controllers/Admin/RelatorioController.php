<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;
use App\Models\Acompanhamento;

class RelatorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.relatorio-admin');
    }


    public function teste(Request $request)
    {
        //variaveis
        $inicio = $request->inicio;
        $fim = $request->fim;
        $fim_sql = date('Y-m-d', strtotime('+1 days', strtotime($request->fim)));
        $unidade = "Patrimônio";

        //instancias
        $comorbidades = DB::select("SELECT COUNT(doenca) AS quantidade, doenca, tipo FROM comorbidades WHERE created_at BETWEEN ? AND ? group by doenca, tipo", [$inicio, $fim_sql]);
        $demograficos = DB::select("SELECT SUM(quantidade) AS quantidade, item FROM demograficos WHERE inserido BETWEEN ? AND ? group by item", [$inicio, $fim_sql]);
        $moradias = DB::select("SELECT SUM(quantidade) AS quantidade, item FROM moradias WHERE inserido BETWEEN ? AND ? group by item", [$inicio, $fim_sql]);
        $acompanhamentos = DB::select("SELECT item, SUM(quantidade) AS quantidade FROM acompanhamentos WHERE inserido BETWEEN ? AND ? group by item", [$inicio, $fim_sql]);

        //carregamento
        $pdf = PDF::loadView('relatorio.teste', compact('unidade', 'inicio', 'fim', 'comorbidades', 'demograficos', 'moradias', 'acompanhamentos'));
        $pdf->setPaper('a4', 'portrait');
        return $pdf->stream('relatorio_teste.pdf'); //stream - download
    }
}
