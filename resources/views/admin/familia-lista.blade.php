@extends('admin.posto-familia')

@section('title', 'Lista - Familía')

@section('body_familia')

    <div class="pagination justify-content-end">
        {!! $familias->links('vendor.pagination.bootstrap-4') !!}    
    </div>

    <table class="table table-responsive-xl table-striped">
        <thead>
            <tr>
                <th scope="col">Familías</th>
                <th scope="col">Comunidade</th>
                <th scope="col">Microarea</th>
                <th scope="col">Area</th>
                <th scope="col">Criado em</th>
                <th scope="col">Status</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
        @foreach($familias as $familia)
            <tr>
                <th scope="row">
                    {{ $familia->numero }}
                </th>
                <td>
                    {{ $familia->comunidade }}
                </td>
                <td>
                    {{ $familia->microarea }}
                </td>
                <td>
                    {{ $familia->area }}
                </td>
                <td>
                {{ date('d/m/Y', strtotime($familia->created_at)) }}
                </td>
                <td>
                    {{ $familia->status }}
                </td>
                <td>
                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                        <form method="post" action="{{ url('admin/familia/pesquisa') }}">
                        @csrf
                            <input type="hidden" name="tipo" value="id">
                            <input type="hidden" name="dado" value="{{ $familia->id }}">
                            <button type="submit" class="btn btn-info btn-sm" >Ver</button>
                        </form>
                        <form method="post" action="{{ url('admin/familia/show') }}">
                        @csrf
                            <input type="hidden" name="id" value="{{ $familia->id }}">
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