@extends('admin.home')

@section('title', 'Lista - Consulta')

@section('body_page')

    
    @component('alerta.alertas')
    @endcomponent
    

    <div class="pagination justify-content-end">
        {!! $consultas->links('vendor.pagination.bootstrap-4') !!}    
    </div>

    <table class="table table-responsive-xl table-striped">
        <thead>
            <tr>
                <th scope="col">Data</th>
                <th scope="col">Paciente</th>
                <th scope="col">Tipo</th>
                <th scope="col">Profissional</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
        @foreach($consultas as $consulta)
            <tr>
                <th scope="row">
                    {{ date('d/m/Y', strtotime($consulta->created_at)) }}
                </th>
                <td>
                    {{ $consulta->paciente }}
                </td>
                <td>
                    {{ $consulta->tipo }}
                </td>
                <td>
                    {{ $consulta->funcionario }}
                </td>
                <td>
                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                        <a class="btn btn-primary btn-sm" href="{{ url('admin/consulta/editar/'.$consulta->id) }}">Editar</a>
                        <a class="btn btn-danger btn-sm" href="{{ url('admin/destroy_consulta/'.$consulta->id) }}">Excluir</a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table> 
    
    <br>

@stop