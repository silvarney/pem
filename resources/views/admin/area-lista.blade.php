@extends('admin.posto-area')

@section('title', 'Lista - Area')

@section('body_area')

    <div class="pagination justify-content-end">
        {!! $areas->links('vendor.pagination.bootstrap-4') !!}    
    </div>

    <table class="table table-responsive-xl table-striped">
        <thead>
            <tr>
                <th scope="col">Unidade</th>
                <th scope="col">CNAE</th>
                <th scope="col">Bairro</th>
                <th scope="col">Descrição</th>
                <th scope="col">Criado em</th>
                <th scope="col">Status</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
        @foreach($areas as $area)
            <tr>
                <th scope="row">
                    {{ $area->unidade }}
                </th>
                <td>
                    {{ $area->cnae }}
                </td>
                <td>
                    {{ $area->bairro }}
                </td>
                <td>
                    {{ $area->descricao }}
                </td>
                <td>
                {{ date('H:i:s d/m/Y', strtotime($area->created_at)) }}
                </td>
                <td>
                    {{ $area->status }}
                </td>
                <td>
                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                        <form method="post" action="{{ url('admin/area/pesquisa') }}">
                        @csrf
                            <input type="hidden" name="tipo" value="id">
                            <input type="hidden" name="dado" value="{{ $area->id }}">
                            <button type="submit" class="btn btn-info btn-sm" >Ver</button>
                        </form>
                        <form method="post" action="{{ url('admin/area/show') }}">
                        @csrf
                            <input type="hidden" name="id" value="{{ $area->id }}">
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