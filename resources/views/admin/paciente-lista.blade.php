@extends('admin.home')

@section('title', 'Lista - Paciente')

@section('body_page')

    @component('alerta.alertas')
    @endcomponent

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form class="d-flex" action="{{ url('admin/paciente/pesquisa') }}" method="post">
                    @csrf
                        <input type="hidden" name="tipo" value="nome">
                        <input class="form-control me-2" type="search" name="dado" placeholder="por nome" aria-label="Search">
                        <button class="btn btn-outline-primary" type="submit">Pesquisar</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form class="d-flex" action="{{ url('admin/paciente/pesquisa') }}" method="post">
                    @csrf
                        <input type="hidden" name="tipo" value="cpf">
                        <input class="form-control me-2 cpf" type="search" name="dado" placeholder="por cpf" aria-label="Search">
                        <button class="btn btn-outline-primary" type="submit">Pesquisar</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form class="d-flex" action="{{ url('admin/paciente/pesquisa') }}" method="post">
                    @csrf
                        <input type="hidden" name="tipo" value="cartao">
                        <input class="form-control me-2 cartao" type="search" name="dado" placeholder="por cartão sus" maxlength="18" aria-label="Search">
                        <button class="btn btn-outline-primary" type="submit">Pesquisar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <br><br>

    <div class="pagination justify-content-end">
        {!! $pacientes->links('vendor.pagination.bootstrap-4') !!}    
    </div>

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
                        <form method="post" action="{{ url('admin/paciente/pesquisa') }}">
                        @csrf
                            <input type="hidden" name="tipo" value="id">
                            <input type="hidden" name="dado" value="{{ $paciente->id }}">
                            <button type="submit" class="btn btn-info btn-sm" >Ver</button>
                        </form>
                        <form method="post" action="{{ url('admin/paciente/editar') }}">
                        @csrf
                            <input type="hidden" name="id" value="{{ $paciente->id }}">
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