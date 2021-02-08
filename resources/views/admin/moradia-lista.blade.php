@extends('admin.moradia-saneamento')

@section('title', 'Lista - Moradia')

@section('body_moradia')

    
    @component('alerta.alertas')
    @endcomponent
    

    <div class="pagination justify-content-end">
        {!! $moradias->links('vendor.pagination.bootstrap-4') !!}    
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
        @foreach($moradias as $moradia)
            <tr>
                <th scope="row">
                    {{ $moradia->item }}
                </th>
                <td>
                    {{ $moradia->quantidade }}
                </td>
                <td>
                    {{ date('d/m/Y', strtotime($moradia->data)) }}
                </td>
                <td>
                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                        <a class="btn btn-primary btn-sm" href="{{ url('admin/moradia/editar/'.$moradia->id) }}">Editar</a>
                        <a class="btn btn-danger btn-sm" href="{{ url('admin/destroy_moradia/'.$moradia->id) }}">Excluir</a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table> 
    
    <br>

@stop