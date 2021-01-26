<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Comunidade;
use App\Models\Area;
use App\Models\Microarea;

class ComunidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.posto-comunidade');
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
        Comunidade::create($request->all());
        return redirect('/admin/posto/comunidade/cadastro')->with('success', 'Item cadastrado com sucesso!');
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

        return view('admin.comunidade-cadastro', compact('microareas', 'areas'));
    }

    public function view_lista()
    {
        $comunidades = DB::table('comunidades')
                ->join('areas', function ($join) {
                    $join->on('comunidades.area_id', '=', 'areas.id');
                })
                ->join('microareas', function ($join) {
                    $join->on('comunidades.microarea_id', '=', 'microareas.id');
                })
                ->select('comunidades.*', 'areas.unidade as area', 'microareas.nome as microarea')
                ->orderBy('comunidades.nome', 'asc')
                ->get();

        return view('admin.comunidade-lista', compact('comunidades'));
    }
}
