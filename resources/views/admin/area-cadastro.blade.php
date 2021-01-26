@extends('admin.posto-area')

@section('title', 'Cadastro - Area')

@section('body_area')

    @if (session('success'))
        @component('alerta.sucesso-cadastro')
        @endcomponent
    @endif

    <form action="{{ url('admin/create_area') }}" method="post">
    @csrf

        <div class="row">
            <div class="col">
                <label for="cadastroAreaUnidade" class="form-label">USF</label>
                <input type="text" class="form-control" id="cadastroAreaUnidade" name="unidade" placeholder="nome da unidade">
            </div>
            <div class="col-2">
                <label for="cadastroAreaCnae" class="form-label">CNAE</label>
                <input type="text" class="form-control" id="cadastroAreaCnae" name="cnae" placeholder="número do CNAE">
            </div>
            <div class="col-2">
                <label for="cadastroAreaStatus" class="form-label">Status</label>
                <select id="cadastroAreaStatus" name="status" class="form-select">
                    <option value="ativo">Ativo</option>
                    <option value="desativado">Desativado</option>
                </select>
            </div>        
        </div>

        <br>
        
        <div class="row">
            <div class="col">
                <label for="cadastroAreaEstado" class="form-label">Estado</label>
                <input type="text" class="form-control" id="cadastroAreaEstado" name="estado" placeholder="Pará">
            </div>
            <div class="col">
                <label for="cadastroAreaCidade" class="form-label">Cidade</label>
                <input type="text" class="form-control" id="cadastroAreaCidade" name="cidade" placeholder="cidade onde mora">
            </div>
            <div class="col">
                <label for="cadastroAreaBairro" class="form-label">Bairro</label>
                <input type="text" class="form-control" id="cadastroAreaBairro" name="bairro" placeholder="bairro onde mora">
            </div>
            <div class="col">
                <label for="cadastroAreaCep" class="form-label">CEP</label>
                <input type="text" class="form-control" id="cadastroAreaCep" name="cep" placeholder="00000-000">
            </div>
            
        </div>

        <br>

        <div class="row">        
            <div class="col-2">  
                <label for="cadastroAreaLogradouro" class="form-label">Logradouro</label>
                <select id="cadastroAreaLogradouro" name="logradouro" class="form-select">
                    <option>Avenida</option>
                    <option>Comunidade</option>
                    <option>Conjunto</option>
                    <option>Distrito</option>
                    <option>Fazenda</option>
                    <option>KM</option>
                    <option>Ramal</option>
                    <option>Residencial</option>
                    <option>Rodovia</option>
                    <option>Rua</option>
                    <option>Sitio</option>
                    <option>Travessa</option>
                    <option>Vila</option>
                    
                </select>
            </div>
            <div class="col">    
                <label for="cadastroAreaDescricao" class="form-label">Descricao</label>
                <input type="text" class="form-control" name="descricao" id="cadastroAreaDescricao" >
            </div>
            <div class="col-2">    
                <label for="cadastroAreaNumero" class="form-label">Número</label>
                <input type="text" class="form-control" id="cadastroAreaNumero" name="numero">
            </div>
        </div>

        <br>

        <button type="submit" class="btn btn-success">Salvar</button>  
    </form>    
    
    <br>


@stop