<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Area;
use App\Models\Microarea;
use App\Models\Funcionario;

class MicroareaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.posto-microarea');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request['status'] = 'ativo';
        Microarea::create($request->all());
        return redirect('/admin/posto/microarea/cadastro')->with('success', 'Item cadastrado com sucesso!');
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

    public function view_cadastro()
    {
        $areas = Area::where('status', 'ativo')->orderBy('unidade', 'asc')->get();
        $agentes = Funcionario::where('status', 'ativo')->orderBy('nome', 'asc')->get();

        return view('admin.microarea-cadastro', compact('areas', 'agentes'));
    }

    public function view_lista()
    {
        $microareas = DB::table('microareas')
                ->join('areas', function ($join) {
                    $join->on('microareas.area_id', '=', 'areas.id');
                })
                ->join('funcionarios', function ($join) {
                    $join->on('microareas.funcionario_id', '=', 'funcionarios.id');
                })
                ->select('microareas.*', 'areas.unidade as area', 'funcionarios.nome as funcionario')
                ->orderBy('microareas.nome', 'asc')
                ->get();

        return view('admin.microarea-lista', compact('microareas'));
    }
}
