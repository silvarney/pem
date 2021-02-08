<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Json;
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
    public function index(Json $json)
    {
        $areas = Area::where('status', 'ativo')->orderBy('unidade', 'asc')->get();
        $microareas = Microarea::where('status', 'ativo')->orderBy('nome', 'asc')->get();
        $comunidades = Comunidade::where('status', 'ativo')->orderBy('nome', 'asc')->get();
        $familias = Familia::where('status', 'ativo')->orderBy('numero', 'asc')->get();

        $estados = $json->estados();

        $cidades = $json->cidades();
        
        return view('admin.paciente-cadastro', compact('areas', 'microareas', 'comunidades', 'familias', 'estados', 'cidades'));
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
     *
     */
    public function store(Request $request)
    {
        $request['user_id'] = 1;
        $request['nome'] = mb_strtoupper($request->nome, 'UTF-8');
        $request['pai'] = mb_strtoupper($request->pai, 'UTF-8');
        $request['mae'] = mb_strtoupper($request->mae, 'UTF-8');
        Paciente::create($request->all());
        return redirect('/admin/paciente/cadastro')->with('success', 'O paciente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Json $json)
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
        
        $estados = $json->estados();

        $cidades = $json->cidades();

        return view('admin.paciente-editar', compact('paciente', 'areas', 'microareas', 'comunidades', 'familias', 'estados', 'cidades'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request)
    {

        $request['nome'] = mb_strtoupper($request->nome, 'UTF-8');
        $request['pai'] = mb_strtoupper($request->pai, 'UTF-8');
        $request['mae'] = mb_strtoupper($request->mae, 'UTF-8');
        
        unset($request['_token']);
        
        Paciente::where('id', $request->id)->update($request->all());

        return redirect('admin/paciente/lista')->with('update', 'O paciente');  
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
                ->where('pacientes.status', 'ativo')
                ->orderBy('pacientes.nome', 'asc')
                ->paginate(15);

        return view('admin.paciente-lista', compact('pacientes'));
    }

    public function view_pesquisa(Request $request)
    {
        

        $paciente = DB::table('pacientes')
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
            ->select('pacientes.*', 'areas.unidade as unidade', 'microareas.nome as microarea', 'comunidades.nome as comunidade', 'familias.numero as familia')
            ->where('pacientes.'.$request->tipo, '=', $request->dado)
            ->first();     
        
        if (isset($paciente)) {
            return view('admin.paciente-pesquisa', compact('paciente'));
        }elseif(!isset($paciente)){
            return redirect('/admin/paciente/lista')->with('naoencontrado', 'O Paciente');
        }    

        
    }
}

/*


        return view('admin.paciente-pesquisa', compact('pacientes'));
*/