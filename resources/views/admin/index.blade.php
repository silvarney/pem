@extends('admin.home')

@section('title', 'Admin')

@section('body_page')

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

    <br>

    <div class="row">
        <div class="col-4">
            <a class="bt-index" href="{{ url('admin/paciente/cadastro') }}">
                <div class="card card-index">
                    <div class="card-body">
                        <img class="ima-btn" src="{{ asset('img/paciente.png') }}"> &nbsp;&nbsp;&nbsp;
                    Cadastrar Paciente
                    </div>
                </div>
            </a>
        </div>
        <div class="col-4">
            <a class="bt-index" href="{{ url('admin/consulta/cadastro') }}">
                <div class="card card-index">
                    <div class="card-body">
                        <img class="ima-btn" src="{{ asset('img/consulta.png') }}"> &nbsp;&nbsp;&nbsp;
                        Cadastrar Consulta
                    </div>
                </div>
            </a>
        </div>
        <div class="col-4">
            <a class="bt-index" href="{{ url('admin/acompanhamento/cadastro') }}">
                <div class="card card-index">
                    <div class="card-body">
                        <img class="ima-btn" src="{{ asset('img/acompanhamento.png') }}"> &nbsp;&nbsp;&nbsp;
                    Cadastrar Acompanhamento
                    </div>
                </div>
            </a>
        </div>
    </div>

    <br>

    <div class="row">
        <div class="col-4">
            <a class="bt-index" href="{{ url('admin/comorbidade/cadastro') }}">
                <div class="card card-index">
                    <div class="card-body">
                        <img class="ima-btn" src="{{ asset('img/comorbidade.png') }}"> &nbsp;&nbsp;&nbsp;
                    Cadastrar Comorbidade
                    </div>
                </div>
            </a>
        </div>
        <div class="col-4">
            <a class="bt-index" href="{{ url('/admin/posto/familia/cadastro') }}">
                <div class="card card-index">
                    <div class="card-body">
                        <img class="ima-btn" src="{{ asset('img/medicamento.png') }}"> &nbsp;&nbsp;&nbsp;
                        Retirar Medicamento
                    </div>
                </div>
            </a>
        </div>
        <div class="col-4">
            <a class="bt-index" href="{{ url('admin/usuario/cadastro') }}">
                <div class="card card-index">
                    <div class="card-body">
                        <img class="ima-btn" src="{{ asset('img/usuario.png') }}"> &nbsp;&nbsp;&nbsp;
                    Cadastrar Usuário
                    </div>
                </div>
            </a>
        </div>
    </div>

@stop

