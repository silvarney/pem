@extends('admin.posto-comunidade')

@section('title', 'Lista - Microcomunidade')

@section('body_comunidade')

    @component('alerta.alertas')
    @endcomponent

    <div class="pagination justify-content-end">
        {!! $comunidades->links('vendor.pagination.bootstrap-4') !!}    
    </div>

    <table class="table table-responsive-xl table-striped">
        <thead>
            <tr>
                <th scope="col">Comunidade</th>
                <th scope="col">Microarea</th>
                <th scope="col">Area</th>
                <th scope="col">Criado em</th>
                <th scope="col">Status</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
        @foreach($comunidades as $comunidade)
            <tr>
                <th scope="row">
                    {{ $comunidade->nome }}
                </th>
                <td>
                    {{ $comunidade->microarea }}
                </td>
                <td>
                    {{ $comunidade->area }}
                </td>
                <td>
                {{ date('H:i:s d/m/Y', strtotime($comunidade->created_at)) }}
                </td>
                <td>
                    {{ $comunidade->status }}
                </td>
                <td>
                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                        <form method="post" action="{{ url('admin/comunidade/pesquisa') }}">
                        @csrf
                            <input type="hidden" name="tipo" value="id">
                            <input type="hidden" name="dado" value="{{ $comunidade->id }}">
                            <button type="submit" class="btn btn-info btn-sm" >Ver</button>
                        </form>
                        <form method="post" action="{{ url('admin/comunidade/editar') }}">
                        @csrf
                            <input type="hidden" name="id" value="{{ $comunidade->id }}">
                            <button type="submit" class="btn btn-primary btn-sm" >Editar</button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table> 
    
    <br>


@stop