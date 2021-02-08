@extends('admin.farmacia-estoque')

@section('title', 'Lista - Retirada')

@section('body_estoque')

    @component('alerta.alertas')
    @endcomponent

    <div class="pagination justify-content-end">
        {!! $retiradas->links('vendor.pagination.bootstrap-4') !!}    
    </div>

    <table class="table table-responsive-xl table-striped">
        <thead>
            <tr>
                <th scope="col">Data</th>
                <th scope="col">Produto</th>
                <th scope="col">Paciente</th>
                <th scope="col">Quantidade</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
        @foreach($retiradas as $retirada)
            <tr>
                <th scope="row">
                    {{ date('d/m/Y', strtotime($retirada->updated_at)) }}
                    
                </th>
                <td>
                    {{ $retirada->produto }}
                </td>
                <td>
                    {{ $retirada->paciente }}
                </td>
                <td>
                    {{ $retirada->quantidade }}
                </td>
                <td>
                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                        <form method="post" action="{{ url('admin/destroy_retirada') }}">
                        @csrf
                            <input type="hidden" name="estoque_id" value="{{ $retirada->estoque_id }}">
                            <input type="hidden" name="quantidade" value="{{ $retirada->quantidade }}">
                            <input type="hidden" name="id" value="{{ $retirada->id }}">
                            <button type="submit" class="btn btn-danger btn-sm" >Excluir</button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table> 
    
    <br>


@stop