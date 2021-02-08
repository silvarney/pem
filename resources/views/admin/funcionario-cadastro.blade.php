@extends('admin.posto-funcionario')

@section('title', 'Cadastro - Funcionário')

@section('body_funcionario')

    @if (session('success'))
        @component('alerta.sucesso-cadastro')
        @endcomponent
    @endif

    <form action="{{ url('admin/create_funcionario') }}" method="post"> 
    @csrf

        <div class="row">
            <div class="col-5">
                <label for="cadastroFuncionarioNome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="cadastroFuncionarioNome" name="nome" placeholder="nome completo">
            </div>
            <div class="col-2">
                <label for="cadastroFuncionarioNascimento" class="form-label">Nascimento</label>
                <input type="date" class="form-control" id="cadastroFuncionarioNascimento" name="nascimento">
            </div>
            <div class="col-1">
                <label for="cadastroFuncionarioIdade" class="form-label">Idade</label>
                <input type="text" class="form-control" id="cadastroFuncionarioIdade" disabled>
            </div>
            <div class="col-2">
                    <label for="cadastroFuncionarioSexo" class="form-label">Sexo</label><br>
                    <select id="cadastroFuncionarioSexo" class="form-select" name="sexo">
                        <option value="Masculino">Masculino</option>
                        <option value="Feminino">Feminino</option>
                        <option value="Ignorado">Ignorado</option>
                    </select>
            </div>
            <div class="col-2">
                <label for="cadastroFuncionarioRaca" class="form-label">Raça</label>
                <select id="cadastroFuncionarioRaca" class="form-select" name="raca">
                    <option value="Amarela">Amarela</option>
                    <option value="Indígena">Indígena</option>
                    <option value="Parda">Parda</option>
                    <option value="Preta">Preta</option>
                </select>
            </div>
        </div>

        <br>

        <div class="row">
            <div class="col">
                <label for="cadastroFuncionarioPai" class="form-label">Pai</label>
                <input type="text" class="form-control" id="cadastroFuncionarioPai" name="pai" placeholder="nome do pai">
            </div>
            <div class="col">
                <label for="cadastroFuncionarioMae" class="form-label">Mãe</label>
                <input type="text" class="form-control" id="cadastroFuncionarioMae" name="mae" placeholder="nome da mãe">
            </div>
            <div class="col-3">
                <label for="cadastroFuncionarioNaturalidade" class="form-label">Naturalidade</label>
                <input class="form-control" list="datalistOptionsNatu" id="cadastroFuncionarioNaturalidade" name="naturalidade" placeholder="cidade que nasceu">
                <datalist id="datalistOptionsNatu">
                    @foreach ($cidades as $cidade) 
                            <option> {{ $cidade['nome'] }}</option>
                    @endforeach
                </datalist>
            </div>
        </div>

        <br>

        <div class="row">        
            <div class="col">    
                <label for="cadastroFuncionarioFone" class="form-label">Fone</label>
                <input type="text" class="form-control fone" id="cadastroFuncionarioFone" name="fone" placeholder="(00)0000-000">
            </div>
            <div class="col">
                <label for="cadastroFuncionarioRg" class="form-label">RG</label>
                <input type="text" class="form-control" id="cadastroFuncionarioRg" name="rg">
            </div>
            <div class="col">
            <label for="cadastroFuncionarioCpf" class="form-label">CPF</label>
                <input type="text" class="form-control cpf" id="cadastroFuncionarioCpf" name="cpf" placeholder="000.000.000-00">
            </div>
            <div class="col">
                <label for="cadastroFuncionarioFuncao" class="form-label">Função</label><br>
                <select id="cadastroFuncionarioFuncao" class="form-select" name="funcao">
                    <option value="Administrativo">Administrativo</option>
                    <option value="Agente de Saúde">Agente de Saúde</option>
                    <option value="Enfermeiro(a)">Enfermeiro(a)</option>
                    <option value="Diretor(a)">Diretor(a)</option>
                    <option value="Secretário(a)">Secretário(a)</option>
                    <option value="Médico(a)">Médico(a)</option>
                </select>
            </div>
            <div class="col">
                <label for="cadastroFuncionarioRegistro" class="form-label">Registro</label>
                <input type="text" class="form-control" id="cadastroFuncionarioRegistro" name="registro" placeholder="COREN/CRM/...">
            </div>
        </div>

        <br>

        <div class="row">
            <div class="col">
                <label for="cadastroFuncionarioEstado" class="form-label">Estado</label>
                <select class="form-select" id="cadastroFuncionarioEstado" name="estado">
                    @foreach ($estados as $estado) 
                        @if($estado['nome'] === 'Pará')
                            <option selected value="{{ $estado['sigla'] }}"> {{ $estado['nome'] }}</option>
                        @else
                            <option value="{{ $estado['sigla'] }}"> {{ $estado['nome'] }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="col">
                <label for="cadastroFuncionarioCidade" class="form-label">Cidade</label>
                <input class="form-control" list="datalistOptions" id="cadastroFuncionarioCidade" name="cidade" placeholder="cidade que mora">
                <datalist id="datalistOptions">
                    @foreach ($cidades as $cidade) 
                            <option> {{ $cidade['nome'] }}</option>
                    @endforeach
                </datalist>
            </div>
            <div class="col">
                <label for="cadastroFuncionarioBairro" class="form-label">Bairro</label>
                <input type="text" class="form-control" id="cadastroFuncionarioBairro" name="bairro" placeholder="bairro onde mora">
            </div>
            <div class="col">
                <label for="cadastroFuncionarioCep" class="form-label">CEP</label>
                <input type="text" class="form-control cep" id="cadastroFuncionarioCep" name="cep" placeholder="00000-000">
            </div>
        </div>

        <br>

        <div class="row">        
            <div class="col-2">  
                <label for="cadastroFuncionarioLogradouro" class="form-label">Logradouro</label>
                <select id="cadastroFuncionarioLogradouro" class="form-select" name="logradouro">
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
                <label for="cadastroFuncionarioDescricao" class="form-label">Descricao</label>
                <input type="text" class="form-control" id="cadastroFuncionarioDescricao" name="descricao">
            </div>
            <div class="col-2">    
                <label for="cadastroFuncionarioNumero" class="form-label">Número</label>
                <input type="text" class="form-control" id="cadastroFuncionarioNumero" name="numero">
            </div>
        </div>

        <br>

        <div class="mb-3">
            <label for="cadastroFuncionarioComplemento" class="form-label">Complemento</label>
            <textarea class="form-control" id="cadastroFuncionarioComplemento" rows="3" name="complemento"></textarea>
        </div>

        <br>

        <div class="row">  
            <div class="col-3">
                <label for="exampleDataListArea" class="form-label">Area</label>
                <select id="cadastroAreaLogradouro" name="area_id" class="form-select">
                @foreach($areas as $area)
                    <option value="{{ $area->id }}">{{ $area->unidade }}</option>
                @endforeach
                </select>
            </div>
            <div class="col-2">
                <label for="cadastroFuncionarioStatus" class="form-label">Status</label>
                <select id="cadastroFuncionarioStatus" class="form-select" name="status">
                    <option value="Ativo">Ativo</option>
                    <option value="Demitido">Demitido</option>
                </select>
            </div>
        </div>

        <br>

        <button type="submit" class="btn btn-primary">Salvar</button>  
        
        <br>
    </form>

    <script>
        
        var nasc = document.getElementById('cadastroFuncionarioNascimento');
        

        nasc.onblur = function(){
            
            calcular(nasc.value);
            
        }

        function calcular(data) {
            var sdt = new Date(data);
            var difdt = new Date(new Date() - sdt);
            
            document.querySelector("#cadastroFuncionarioIdade").value = (difdt.toISOString().slice(0, 4) - 1970);
        }
    </script>

@stop