@extends('admin.farmacia-estoque')

@section('title', 'Lista - Estoque')

@section('body_estoque')

    @component('alerta.alertas')
    @endcomponent

    <div class="pagination justify-content-end">
        {!! $estoques->links('vendor.pagination.bootstrap-4') !!}    
    </div>

    <table class="table table-responsive-xl table-striped">
        <thead>
            <tr>
                <th scope="col">Código</th>
                <th scope="col">Produto</th>
                <th scope="col">Validade</th>
                <th scope="col">Quantidade</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
        @foreach($estoques as $estoque)
            <tr>
                <th scope="row">
                    {{ $estoque->codigo }}
                </th>
                <td>
                    {{ $estoque->produto }}
                </td>
                <td>
                    {{ date('d/m/Y', strtotime($estoque->validade)) }}
                </td>
                <td>
                    {{ $estoque->quantidade }}
                </td>
                <td>
                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                        <a class="btn btn-primary btn-sm" href="{{ url('admin/farmacia/estoque/editar/'.$estoque->id) }}">Editar</a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table> 
    
    <br>


@stop