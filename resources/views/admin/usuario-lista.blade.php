@extends('admin.home')

@section('title', 'Lista - Usuário')

@section('body_page')

    @component('alerta.alertas')
    @endcomponent

    <div class="pagination justify-content-end">
        {!! $usuarios->links('vendor.pagination.bootstrap-4') !!}    
    </div>

    <table class="table table-responsive-xl table-striped">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">CPF</th>
                <th scope="col">Tipo</th>
                <th scope="col">Nível</th>
                <th scope="col">Status</th>
                <th scope="col">Cadastrado</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
        @foreach($usuarios as $usuario)
            <tr>
                <th scope="row">
                    {{ $usuario->name }}
                </th>
                <td>
                    {{ $usuario->cpf }}
                </td>
                <td>
                    {{ $usuario->tipo }}
                </td>
                <td>
                    {{ $usuario->nivel }}
                </td>
                <td>
                    {{ $usuario->status }}
                </td>
                <td>
                    {{ date('d/m/Y', strtotime($usuario->updated_at)) }}
                </td>
                <td>
                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                        <a class="btn btn-primary btn-sm" href="{{ url('admin/usuario/editar/'.$usuario->id) }}">Editar</a>
                        <a class="btn btn-danger btn-sm" href="{{ url('admin/destroy_usuario/'.$usuario->id) }}">Excluir</a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table> 
    
    <br>


@stop