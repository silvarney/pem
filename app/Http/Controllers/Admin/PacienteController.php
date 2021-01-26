<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Paciente;
use App\Models\Area;
use App\Models\Microarea;
use App\Models\Comunidade;
use App\Models\Familia;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $areas = Area::where('status', 'ativo')->orderBy('unidade', 'asc')->get();
        $microareas = Microarea::where('status', 'ativo')->orderBy('nome', 'asc')->get();
        $comunidades = Comunidade::where('status', 'ativo')->orderBy('nome', 'asc')->get();
        $familias = Familia::where('status', 'ativo')->orderBy('numero', 'asc')->get();

        return view('admin.paciente-cadastro', compact('areas', 'microareas', 'comunidades', 'familias'));
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
        $request['user_id'] = 1;
        Paciente::create($request->all());
        return redirect('/admin/paciente/cadastro')->with('success', 'Item cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $paciente2 = DB::table('pacientes')
            ->join('areas', function ($join) {
                $join->on('pacientes.area_id', '=', 'areas.id');
            })
            ->join('microareas', function ($join) {
                $join->on('pacientes.microarea_id', '=', 'microareas.id');
            })
            ->join('comunidades', function ($join) {
                $join->on('pacientes.comunidade_id', '=', 'comunidades.id');
            })
            ->join('familias', function ($join) {
                $join->on('pacientes.familia_id', '=', 'familias.id');
            })
            ->select('familias.*', 'comunidades.nome as comunidade', 'areas.unidade as area', 'microareas.nome as microarea')
            ->where('pacientes.id', '=', 2)
            ->first();

        $paciente = Paciente::where('id', '=', $request->id)->first();

        $areas = Area::where('status', 'ativo')->orderBy('unidade', 'asc')->get();
        $microareas = Microarea::where('status', 'ativo')->orderBy('nome', 'asc')->get();
        $comunidades = Comunidade::where('status', 'ativo')->orderBy('nome', 'asc')->get();
        $familias = Familia::where('status', 'ativo')->orderBy('numero', 'asc')->get();       

        return view('admin.paciente-editar', compact('paciente', 'areas', 'microareas', 'comunidades', 'familias'));
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

    public function view_lista()
    {
        $pacientes = DB::table('pacientes')
                ->join('areas', function ($join) {
                    $join->on('pacientes.area_id', '=', 'areas.id');
                })
                ->select('pacientes.*', 'areas.unidade as area')
                ->orderBy('pacientes.nome', 'asc')
                ->get();

        return view('admin.paciente-lista', compact('pacientes'));
    }
}
