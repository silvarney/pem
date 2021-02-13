<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Consulta;
use App\Models\Paciente;
use App\Models\Funcionario;

class ConsultaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes = Paciente::orderBy('nome', 'asc')->get();
        $funcionarios = Funcionario::orderBy('nome', 'asc')->get();
        
        return view('admin.consulta-cadastro', compact('pacientes', 'funcionarios'));
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
        $request['area_id'] = 1;
        
        Consulta::create($request->all());
        return redirect('/admin/consulta/cadastro')->with('success', 'A consulta');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $consulta = Consulta::find($id);

        $pacientes = Paciente::orderBy('nome', 'asc')->get();
        $funcionarios = Funcionario::orderBy('nome', 'asc')->get();

        return view('admin.consulta-editar', compact('consulta', 'pacientes', 'funcionarios'));
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
    public function update(Request $request)
    {
        unset($request['_token']);
        
        Consulta::where('id', $request->id)->update($request->all());

        return redirect('admin/consulta/lista')->with('update', 'A consulta!');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) 
    {
        Consulta::destroy($id);
        return redirect('/admin/consulta/lista')->with('delete', 'A consulta');
    }

    public function view_lista()
    {
        $consultas = DB::table('consultas')
                ->join('pacientes', function ($join) {
                    $join->on('consultas.paciente_id', '=', 'pacientes.id');
                })
                ->join('funcionarios', function ($join) {
                    $join->on('consultas.funcionario_id', '=', 'funcionarios.id');
                })
                ->select('consultas.*', 'pacientes.nome as paciente', 'funcionarios.nome as funcionario')
                ->orderBy('consultas.updated_at', 'asc')
                ->paginate(15);

        return view('admin.consulta-lista', compact('consultas'));
    }
}
