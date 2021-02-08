@extends('admin.home')

@section('title', 'Cadastro - Paciente')

@section('body_page')

    @component('alerta.alertas')
    @endcomponent

    <form action="{{ url('admin/create_paciente') }}" method="post">
    @csrf

        <div class="row">
            <div class="col-5">
                <label for="cadastroPacienteNome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="cadastroPacienteNome" name="nome" placeholder="nome completo">
            </div>
            <div class="col-2">
                <label for="cadastroPacienteNascimento" class="form-label">Nascimento</label>
                <input type="date" class="form-control" id="cadastroPacienteNascimento" name="nascimento">
            </div>
            <div class="col-1">
                <label for="cadastroPacienteIdade" class="form-label">Idade</label>
                <input type="text" class="form-control" id="cadastroPacienteIdade" disabled>
            </div>
            <div class="col-2">
                    <label for="cadastroPacienteSexo" class="form-label">Sexo</label><br>
                    <select id="cadastroPacienteSexo" class="form-select" name="sexo">
                        <option value="Masculino">Masculino</option>
                        <option value="Feminino">Feminino</option>
                        <option value="Ignorado">Ignorado</option>
                    </select>
            </div>
            <div class="col-2">
                <label for="cadastroPacienteRaca" class="form-label">Raça</label>
                <select id="cadastroPacienteRaca" class="form-select" name="raca">
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
                <label for="cadastroPacientePai" class="form-label">Pai</label>
                <input type="text" class="form-control" id="cadastroPacientePai" name="pai" placeholder="nome do pai">
            </div>
            <div class="col">
                <label for="cadastroPacienteMae" class="form-label">Mãe</label>
                <input type="text" class="form-control" id="cadastroPacienteMae" name="mae" placeholder="nome da mãe">
            </div>
            <div class="col-3">
                <label for="cadastroPacienteNaturalidade" class="form-label">Naturalidade</label>
                <input class="form-control" list="datalistOptionsNatu" id="cadastroPacienteNaturalidade" name="naturalidade" placeholder="cidade que nasceu">
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
                <label for="cadastroPacienteFone" class="form-label">Fone</label>
                <input type="text" class="form-control fone" id="cadastroPacienteFone" name="fone" placeholder="(00)0000-000">
            </div>
            <div class="col">
                <label for="cadastroPacienteRg" class="form-label">RG</label>
                <input type="text" class="form-control" id="cadastroPacienteRg" name="rg">
            </div>
            <div class="col">
            <label for="cadastroPacienteCpf" class="form-label">CPF</label>
                <input type="text" class="form-control cpf" id="cadastroPacienteCpf" name="cpf" placeholder="000.000.000-00">
            </div>
            <div class="col">
            <label for="cadastroPacienteCartao" class="form-label">Cartão SUS</label>
                <input type="text" class="form-control cartao" id="cadastroPacienteCartao" name="cartao" placeholder="000 0000 0000 0000">
            </div>
            <div class="col">
            <label for="cadastroPacientePronturario" class="form-label">Número Prontuário</label>
                <input type="text" class="form-control" id="cadastroPacientePronturario" name="prontuario" placeholder="00000">
            </div>
            <div class="col">
                <label for="cadastroPacienteStatus" class="form-label">Status</label>
                <select id="cadastroPacienteStatus" class="form-select" name="status">
                    <option value="ativo">Ativo</option>
                    <option value="óbito">Óbito</option>
                </select>
            </div>
        </div>

        <br>

        <div class="row">
            <div class="col">
                <label for="cadastroPacienteEstado" class="form-label">Estado</label>
                <select class="form-select" id="cadastroPacienteEstado" name="estado">
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
                <label for="cadastroPacienteCidade" class="form-label">Cidade</label>
                <input class="form-control" list="datalistOptions" id="cadastroPacienteCidade" name="cidade" placeholder="cidade que mora">
                <datalist id="datalistOptions">
                    @foreach ($cidades as $cidade) 
                            <option> {{ $cidade['nome'] }}</option>
                    @endforeach
                </datalist>
            </div>
            <div class="col">
                <label for="cadastroPacienteBairro" class="form-label">Bairro</label>
                <input type="text" class="form-control" id="cadastroPacienteBairro" name="bairro" placeholder="bairro onde mora">
            </div>
            <div class="col">
                <label for="cadastroPacienteCep" class="form-label">CEP</label>
                <input type="text" class="form-control cep" id="cadastroPacienteCep" name="cep" placeholder="00000-000">
            </div>
            
        </div>

        <br>

        <div class="row">        
            <div class="col-2">  
                <label for="cadastroPacienteLogradouro" class="form-label">Logradouro</label>
                <select id="cadastroPacienteLogradouro" class="form-select" name="logradouro">
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
                <label for="cadastroPacienteDescricao" class="form-label">Descricao</label>
                <input type="text" class="form-control" id="cadastroPacienteDescricao" name="descricao">
            </div>
            <div class="col-2">    
                <label for="cadastroPacienteNumero" class="form-label">Número</label>
                <input type="text" class="form-control" id="cadastroPacienteNumero" name="numero">
            </div>
        </div>

        <br>

        <div class="mb-3">
            <label for="cadastroPacienteComplemento" class="form-label">Complemento</label>
            <textarea class="form-control" id="cadastroPacienteComplemento" rows="3" name="complemento"></textarea>
        </div>

        <br>

        <div class="row">        
        <div class="col">
                <label for="exampleDataListArea" class="form-label">Area</label>
                <select id="cadastroPacienteLogradouro" name="area_id" class="form-select">
                @foreach($areas as $area)
                    <option value="{{ $area->id }}">{{ $area->unidade }}</option>
                @endforeach
                </select>
            </div> 
            <div class="col">
                <label for="exampleDataListMicroarea" class="form-label">Microarea</label>
                <select id="cadastroPacienteLogradouro" name="microarea_id" class="form-select">
                @foreach($microareas as $microarea)
                    <option value="{{ $microarea->id }}">{{ $microarea->nome }}</option>
                @endforeach
                </select>
            </div>    
            <div class="col">
                <label for="exampleDataListComunidade" class="form-label">Comunidade</label>
                <select id="cadastroPacienteLogradouro" name="comunidade_id" class="form-select">
                @foreach($comunidades as $comunidade)
                    <option value="{{ $comunidade->id }}">{{ $comunidade->nome }}</option>
                @endforeach
                </select>
            </div>  
            <div class="col">
                <label for="exampleDataListFamilia" class="form-label">Familía</label>
                <select id="cadastroPacienteFamilia" name="familia_id" class="form-select">
                @foreach($familias as $familia)
                    <option value="{{ $familia->id }}">{{ $familia->numero }}</option>
                @endforeach
                </select>
            </div>
        </div>

        <br>

        <button type="submit" class="btn btn-primary">Salvar</button>  
        
    </form>

    <br>

    <script>
        
        var nasc = document.getElementById('cadastroPacienteNascimento');
        

        nasc.onblur = function(){
            
            calcular(nasc.value);
            
        }

        function calcular(data) {
            var sdt = new Date(data);
            var difdt = new Date(new Date() - sdt);
            
            document.querySelector("#cadastroPacienteIdade").value = (difdt.toISOString().slice(0, 4) - 1970);
        }
    </script>

@stop