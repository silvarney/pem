@extends('admin.home')

@section('title', 'Editar - Usuário')

@section('body_page')

    <form action="{{ url('admin/update_usuario') }}" method="post">
        @csrf

        <input type="hidden" name="id" value="{{ $usuario->id }}">

        <div class="row">
            <div class="col">
                <label for="editarUsuarioNome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="editarUsuarioNome" name="name" value="{{ $usuario->name }}" placeholder="nome completo">
            </div>
            <div class="col">
                <label for="editarUsuarioEmail" class="form-label">Email</label>
                <input type="text" class="form-control" id="editarUsuarioEmail" name="email" value="{{ $usuario->email }}" placeholder="email">
            </div>
        </div>

        <br>

        <div class="row">        
            <div class="col">
                <label for="editarUsuarioCpf" class="form-label">CPF</label>
                <input type="text" class="form-control cpf" id="editarUsuarioCpf" name="cpf" value="{{ $usuario->cpf }}" placeholder="000.000.000-00">
            </div>
            <div class="col">
                <label for="editarUsuarioTipo" class="form-label">Tipo</label><br>
                <select id="editarUsuarioTipo" class="form-select" name="tipo">
                    <option>Agente de Saúde</option>
                    <option>Enfermeiro</option>
                    <option>Administrativo</option>
                    <option selected>{{ $usuario->tipo }}</option>
                </select>
            </div>
            <div class="col">
                <label for="editarUsuarioNivel" class="form-label">Nível</label><br>
                <select id="editarUsuarioNivel" class="form-select" name="nivel">
                    <option>Normal</option>
                    <option>Super</option>
                    <option selected>{{ $usuario->nivel }}</option>
                </select>
            </div>
            <div class="col">
                <label for="editarUsuarioRegistro" class="form-label">Senha</label>
                <input type="text" class="form-control" id="editarUsuarioRegistro" name="password" value="{{ $usuario->password }}" placeholder="*****">
            </div>
        </div>

        <br>

        <div class="col-2">
            <label for="editarUsuarioStatus" class="form-label">Status</label><br>
            <select id="editarUsuarioStatus" class="form-select" name="status">
                <option>ativo</option>
                <option>desativado</option>
                <option selected>{{ $usuario->status }}</option>
            </select>
        </div>

        <br>

        <button type="submit" class="btn btn-primary">Salvar</button>  
        
        <br>
    </form>


@stop