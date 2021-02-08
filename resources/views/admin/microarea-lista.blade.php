@extends('admin.posto-microarea')

@section('title', 'Lista - Micromicroarea')

@section('body_microarea')

    <div class="pagination justify-content-end">
        {!! $microareas->links('vendor.pagination.bootstrap-4') !!}    
    </div>

    <table class="table table-responsive-xl table-striped">
        <thead>
            <tr>
                <th scope="col">Micromicroarea</th>
                <th scope="col">microarea</th>
                <th scope="col">Agente de Saúde</th>
                <th scope="col">Criado em</th>
                <th scope="col">Status</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
        @foreach($microareas as $microarea)
            <tr>
                <th scope="row">
                    {{ $microarea->nome }}
                </th>
                <td>
                    {{ $microarea->area }}
                </td>
                <td>
                    {{ $microarea->funcionario }}
                </td>
                <td>
                {{ date('H:i:s d/m/Y', strtotime($microarea->created_at)) }}
                </td>
                <td>
                    {{ $microarea->status }}
                </td>
                <td>
                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                        <form method="post" action="{{ url('admin/microarea/pesquisa') }}">
                        @csrf
                            <input type="hidden" name="tipo" value="id">
                            <input type="hidden" name="dado" value="{{ $microarea->id }}">
                            <button type="submit" class="btn btn-info btn-sm" >Ver</button>
                        </form>
                        <form method="post" action="{{ url('admin/microarea/show') }}">
                        @csrf
                            <input type="hidden" name="id" value="{{ $microarea->id }}">
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