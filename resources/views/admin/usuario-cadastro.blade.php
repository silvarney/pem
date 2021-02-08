@extends('admin.home')

@section('title', 'Cadastro - Usuário')

@section('body_page')

    @component('alerta.alertas')
    @endcomponent

    <form action="{{ url('admin/create_usuario') }}" method="post">
        @csrf

        <div class="row">
            <div class="col">
                <label for="cadastroFuncionarioNome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="cadastroFuncionarioNome" name="name" placeholder="nome completo">
            </div>
            <div class="col">
                <label for="cadastroFuncionarioEmail" class="form-label">Email</label>
                <input type="text" class="form-control" id="cadastroFuncionarioEmail" name="email" placeholder="email">
            </div>
        </div>

        <br>

        <div class="row">        
            <div class="col">
                <label for="cadastroFuncionarioCpf" class="form-label">CPF</label>
                <input type="text" class="form-control cpf" id="cadastroFuncionarioCpf" name="cpf" placeholder="000.000.000-00">
            </div>
            <div class="col">
                <label for="cadastroFuncionarioTipo" class="form-label">Tipo</label><br>
                <select id="cadastroFuncionarioTipo" class="form-select" name="tipo">
                    <option>Agente de Saúde</option>
                    <option>Enfermeiro</option>
                    <option>Administrativo</option>
                </select>
            </div>
            <div class="col">
                <label for="cadastroFuncionarioNivel" class="form-label">Nível</label><br>
                <select id="cadastroFuncionarioNivel" class="form-select" name="nivel">
                    <option>Padrão</option>
                    <option>Super</option>
                </select>
            </div>
            <div class="col">
                <label for="cadastroFuncionarioRegistro" class="form-label">Senha</label>
                <input type="text" class="form-control" id="cadastroFuncionarioRegistro" name="password" placeholder="*****">
            </div>
        </div>

        <br>

        <button type="submit" class="btn btn-primary">Salvar</button>  
        
        <br>
    </form>


@stop