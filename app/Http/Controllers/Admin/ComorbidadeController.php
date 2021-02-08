<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Comorbidade;
use App\Models\Paciente;

class ComorbidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes = Paciente::orderBy('nome', 'asc')->get();
        return view('admin.comorbidade-cadastro', compact('pacientes'));
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

        Comorbidade::create($request->all());
        return redirect('/admin/comorbidade/cadastro')->with('success', 'A comorbidade');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comorbidade = Comorbidade::find($id);
        $pacientes = Paciente::orderBy('nome', 'asc')->get();

        return view('admin.comorbidade-editar', compact('comorbidade', 'pacientes'));
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
        
        Comorbidade::where('id', $request->id)->update($request->all());

        return redirect('admin/comorbidade/lista')->with('update', 'A comorbidade');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Comorbidade::destroy($id);
        return redirect('/admin/comorbidade/lista')->with('delete', 'A comorbidade');
    }

    public function view_lista()
    {
        $comorbidades = DB::table('comorbidades')
                ->join('pacientes', function ($join) {
                    $join->on('comorbidades.paciente_id', '=', 'pacientes.id');
                })
                ->select('comorbidades.*', 'pacientes.nome as paciente')
                ->orderBy('comorbidades.tipo', 'asc')
                ->paginate(15);

        return view('admin.comorbidade-lista', compact('comorbidades'));
    }
}
