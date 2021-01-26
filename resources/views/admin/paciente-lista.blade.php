@extends('admin.home')

@section('title', 'Lista - Paciente')

@section('body_page')

    <table class="table table-responsive-xl table-striped">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Cartão SUS</th>
                <th scope="col">Prontuário</th>
                <th scope="col">Area</th>
                <th scope="col">Criado em</th>
                <th scope="col">Status</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
        @foreach($pacientes as $paciente)
            <tr>
                <th scope="row">
                    {{ $paciente->nome }}
                </th>
                <td>
                    {{ $paciente->cartao }}
                </td>
                <td>
                    {{ $paciente->prontuario }}
                </td>
                <td>
                    {{ $paciente->area }}
                </td>
                <td>
                {{ date('d/m/Y', strtotime($paciente->created_at)) }}
                </td>
                <td>
                    {{ $paciente->status }}
                </td>
                <td>
                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                        <form method="post" action="{{ url('admin/paciente/show') }}">
                            {{ csrf_field() }}<input type="hidden" name="id" value="{{ $paciente->id }}">
                            <button type="submit" class="btn btn-success btn-sm" >Abrir</button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table> 
    
    <br>


@stop