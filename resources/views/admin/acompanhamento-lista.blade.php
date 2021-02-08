@extends('admin.home')

@section('title', 'Lista - Acompanhamento')

@section('body_page')

    @component('alerta.alertas')
    @endcomponent

    <div class="pagination justify-content-end">
        {!! $acompanhamentos->links('vendor.pagination.bootstrap-4') !!}    
    </div>

    <table class="table table-responsive-xl table-striped">
        <thead>
            <tr>
                <th scope="col">Item</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Data</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
        @foreach($acompanhamentos as $acompanhamento)
            <tr>
                <th scope="row">
                    {{ $acompanhamento->item }}
                </th>
                <td>
                    {{ $acompanhamento->quantidade }}
                </td>
                <td>
                    {{ date('d/m/Y', strtotime($acompanhamento->data)) }}
                </td>
                <td>
                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                        <a class="btn btn-primary btn-sm" href="{{ url('admin/acompanhamento/editar/'.$acompanhamento->id) }}">Editar</a>
                        <a class="btn btn-danger btn-sm" href="{{ url('admin/destroy_acompanhamento/'.$acompanhamento->id) }}">Excluir</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table> 
    
    <br>


@stop