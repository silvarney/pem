@extends('admin.home')

@section('title', 'Lista - Comorbidade')

@section('body_page')

    @component('alerta.alertas')
    @endcomponent

    <div class="pagination justify-content-end">
        {!! $comorbidades->links('vendor.pagination.bootstrap-4') !!}    
    </div>

    <table class="table table-responsive-xl table-striped">
        <thead>
            <tr>
                <th scope="col">Tipo</th>
                <th scope="col">Doença</th>
                <th scope="col">Paciente</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
        @foreach($comorbidades as $comorbidade)
            <tr>
                <th scope="row">
                    {{ $comorbidade->tipo }}
                </th>
                <td>
                    {{ $comorbidade->doenca }}
                </td>
                <td>
                    {{ $comorbidade->paciente }}
                </td>
                <td>
                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                        <a class="btn btn-primary btn-sm" href="{{ url('admin/comorbidade/editar/'.$comorbidade->id) }}">Editar</a>
                        <a class="btn btn-danger btn-sm" href="{{ url('admin/destroy_comorbidade/'.$comorbidade->id) }}">Excluir</a>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table> 
    
    <br>

@stop