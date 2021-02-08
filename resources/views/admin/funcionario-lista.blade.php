@extends('admin.posto-funcionario')

@section('title', 'Lista - Funcionário')

@section('body_funcionario')

    <div class="pagination justify-content-end">
        {!! $funcionarios->links('vendor.pagination.bootstrap-4') !!}    
    </div>

    <table class="table table-responsive-xl table-striped">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Função</th>
                <th scope="col">Area</th>
                <th scope="col">Criado em</th>
                <th scope="col">Status</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
        @foreach($funcionarios as $funcionario)
            <tr>
                <th scope="row">
                    {{ $funcionario->nome }}
                </th>
                <td>
                    {{ $funcionario->funcao }}
                </td>
                <td>
                    {{ $funcionario->area }}
                </td>
                <td>
                {{ date('d/m/Y', strtotime($funcionario->created_at)) }}
                </td>
                <td>
                    {{ $funcionario->status }}
                </td>
                <td>
                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                        <form method="post" action="{{ url('admin/funcionario/pesquisa') }}">
                        @csrf
                            <input type="hidden" name="tipo" value="id">
                            <input type="hidden" name="dado" value="{{ $funcionario->id }}">
                            <button type="submit" class="btn btn-info btn-sm" >Ver</button>
                        </form>
                        <form method="post" action="{{ url('admin/funcionario/show') }}">
                        @csrf
                            <input type="hidden" name="id" value="{{ $funcionario->id }}">
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