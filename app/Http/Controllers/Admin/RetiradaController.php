<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Retirada;
use App\Models\Estoque;
use App\Models\Paciente;

class RetiradaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes = Paciente::get();
        $estoques = Estoque::get();

        return view('admin.estoque-retirada', compact('estoques', 'pacientes'));
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

        Estoque::where('id', $request->estoque_id)->decrement('quantidade', $request->quantidade);

        Retirada::create($request->all());
        return redirect('/admin/farmacia/estoque/retirada')->with('success', 'Item cadastrado com sucesso!');
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
    public function destroy(Request $request)
    {
        Estoque::where('id', $request->estoque_id)->increment('quantidade', $request->quantidade);

        Retirada::destroy($request->id);
        return redirect('/admin/farmacia/retirada/lista')->with('delete', 'A retirada');
    }

    public function view_lista()
    {
        $retiradas = DB::table('retiradas')
                ->join('pacientes', function ($join) {
                    $join->on('retiradas.paciente_id', '=', 'pacientes.id');
                })
                ->join('estoques', function ($join) {
                    $join->on('retiradas.estoque_id', '=', 'estoques.id');
                })
                ->select('retiradas.*', 'pacientes.nome as paciente', 'estoques.produto as produto')
                ->orderBy('retiradas.updated_at', 'desc')
                ->paginate(15);

        return view('admin.retirada-lista', compact('retiradas'));
    }
}
