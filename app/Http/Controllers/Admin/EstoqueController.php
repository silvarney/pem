<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Estoque;

class EstoqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.estoque-cadastro');
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
        $request['produto'] = mb_strtoupper($request->produto, 'UTF-8');
        $request['user_id'] = 1;
        $request['area_id'] = 1;

        Estoque::create($request->all());
        return redirect('/admin/farmacia/estoque/cadastro')->with('success', 'Item cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estoque = Estoque::find($id);

        return view('admin.estoque-editar', compact('estoque'));
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
        
        Estoque::where('id', $request->id)->update($request->all());

        return redirect('admin/farmacia/estoque/lista')->with('update', 'O produto');  
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
        $estoques = Estoque::orderBy('produto', 'asc')->paginate(15);

        return view('admin.estoque-lista', compact('estoques'));
    }
}
