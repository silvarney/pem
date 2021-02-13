<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Json;
use App\Models\Acompanhamento;

class AcompanhamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Json $json)
    {
        
        $acompanhamentos = $json->acompanhamentos();

        return view('admin.acompanhamento-cadastro', compact('acompanhamentos'));
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
        $request['area_id'] = 1;

        Acompanhamento::create($request->all());
        return redirect('/admin/acompanhamento/cadastro')->with('success', 'O acompanhamento');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Json $json, $id)
    {
        $itens = $json->acompanhamentos();

        $acompanhamento = Acompanhamento::find($id);

        return view('admin.acompanhamento-editar', compact('acompanhamento', 'itens'));
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
        
        Acompanhamento::where('id', $request->id)->update($request->all());

        return redirect('admin/acompanhamento/lista')->with('update', 'O acompanhamento!');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Acompanhamento::destroy($id);
        return redirect('/admin/acompanhamento/lista')->with('delete', 'O acompanhamento');
    }

    public function view_lista(Json $json)
    {
        $acompanhamentos = DB::table('acompanhamentos')
            ->join('users', function ($join) {
                $join->on('acompanhamentos.user_id', '=', 'users.id');
            })
            ->select('acompanhamentos.*', 'users.name as agente')
            ->orderBy('acompanhamentos.inserido', 'desc')
            ->paginate(15);

        $itens = $json->acompanhamentos();

        return view('admin.acompanhamento-lista', compact('acompanhamentos', 'itens'));
    }
}
