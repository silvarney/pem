@extends('admin.perfil-demografico')

@section('title', 'Lista - Demografico')

@section('body_demografico')

    
    @component('alerta.alertas')
    @endcomponent
    

    <div class="pagination justify-content-end">
        {!! $demograficos->links('vendor.pagination.bootstrap-4') !!}    
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
        @foreach($demograficos as $demografico)
            <tr>
                <th scope="row">
                    {{ $demografico->item }}
                </th>
                <td>
                    {{ $demografico->quantidade }}
                </td>
                <td>
                    {{ date('d/m/Y', strtotime($demografico->data)) }}
                </td>
                <td>
                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                        <a class="btn btn-primary btn-sm" href="{{ url('admin/demografico/editar/'.$demografico->id) }}">Editar</a>
                        <a class="btn btn-danger btn-sm" href="{{ url('admin/destroy_demografico/'.$demografico->id) }}">Excluir</a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table> 
    
    <br>

@stop