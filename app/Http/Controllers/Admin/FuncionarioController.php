<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\DB;
use App\Models\Json;
use App\Models\Funcionario;
use App\Models\Area;

class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.posto-funcionario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request['nome'] = mb_strtoupper($request->nome, 'UTF-8');
        $request['pai'] = mb_strtoupper($request->pai, 'UTF-8');
        $request['mae'] = mb_strtoupper($request->mae, 'UTF-8');
        Funcionario::create($request->all());
        return redirect('/admin/posto/funcionario/cadastro')->with('success', 'Item cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function view_cadastro(Json $json)
    {
        $areas = Area::where('status', 'ativo')->orderBy('unidade', 'asc')->get();

        $estados = $json->estados();

        $cidades = $json->cidades();

        return view('admin.funcionario-cadastro', compact('areas', 'estados', 'cidades'));
    }

    public function view_lista()
    {
        $funcionarios = DB::table('funcionarios')
                ->join('areas', function ($join) {
                    $join->on('funcionarios.area_id', '=', 'areas.id');
                })
                ->select('funcionarios.*', 'areas.unidade as area')
                ->orderBy('funcionarios.nome', 'asc')
                ->paginate(15);

        return view('admin.funcionario-lista', compact('funcionarios'));
    }
}
