<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Familia;
use App\Models\Area;
use App\Models\Microarea;
use App\Models\Comunidade;

class FamiliaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.posto-familia');
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
        Familia::create($request->all());
        return redirect('/admin/posto/familia/cadastro')->with('success', 'Item cadastrado com sucesso!');
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
        $microareas = Microarea::where('status', 'ativo')->orderBy('nome', 'asc')->get();
        $comunidades = Comunidade::where('status', 'ativo')->orderBy('nome', 'asc')->get();

        return view('admin.familia-cadastro', compact('comunidades','microareas', 'areas'));
    }

    public function view_lista()
    {
        $familias = DB::table('familias')
                ->join('areas', function ($join) {
                    $join->on('familias.area_id', '=', 'areas.id');
                })
                ->join('microareas', function ($join) {
                    $join->on('familias.microarea_id', '=', 'microareas.id');
                })
                ->join('comunidades', function ($join) {
                    $join->on('familias.comunidade_id', '=', 'comunidades.id');
                })
                ->select('familias.*', 'comunidades.nome as comunidade', 'areas.unidade as area', 'microareas.nome as microarea')
                ->orderBy('familias.numero', 'asc')
                ->get();

        return view('admin.familia-lista', compact('familias'));
    }
}
