@extends('admin.home')

@section('title', 'Editar - Paciente')

@section('body_page')

    @if (session('success'))
        @component('alerta.sucesso-cadastro')
        @endcomponent
    @endif

    <form action="{{ url('admin/create_paciente') }}" method="post">
    @csrf

        <div class="row">
            <div class="col-5">
                <label for="cadastroPacienteNome" class="form-label">Nome</label>
                <input type="text" style="text-transform:uppercase;" class="form-control" id="cadastroPacienteNome" name="nome" value="{{ $paciente->nome }}">
            </div>
            <div class="col-2">
                <label for="cadastroPacienteNascimento" class="form-label">Nascimento</label>
                <input type="date" class="form-control" id="cadastroPacienteNascimento" name="nascimento" value="{{ $paciente->nascimento }}">
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
                <input type="text" style="text-transform:uppercase;" class="form-control" id="cadastroPacientePai" name="pai" value="{{ $paciente->pai }}">
            </div>
            <div class="col">
                <label for="cadastroPacienteMae" class="form-label">Mãe</label>
                <input type="text" style="text-transform:uppercase;" class="form-control" id="cadastroPacienteMae" name="mae" value="{{ $paciente->mae }}">
            </div>
            <div class="col-3">
                <label for="cadastroPacienteNaturalidade" class="form-label">Naturalidade</label>
                <input type="text" class="form-control" id="cadastroPacienteNaturalidade" name="naturalidade" value="{{ $paciente->naturalidade }}">
            </div>
        </div>

        <br>

        <div class="row">        
            <div class="col">    
                <label for="cadastroPacienteFone" class="form-label">Fone</label>
                <input type="text" class="form-control fone" id="cadastroPacienteFone" name="fone" value="{{ $paciente->fone }}">
            </div>
            <div class="col">
                <label for="cadastroPacienteRg" class="form-label">RG</label>
                <input type="text" class="form-control" id="cadastroPacienteRg" name="rg" value="{{ $paciente->rg }}">
            </div>
            <div class="col">
            <label for="cadastroPacienteCpf" class="form-label">CPF</label>
                <input type="text" class="form-control cpf" id="cadastroPacienteCpf" name="cpf" value="{{ $paciente->cpf }}">
            </div>
            <div class="col">
            <label for="cadastroPacienteCartao" class="form-label">Cartão SUS</label>
                <input type="text" class="form-control" id="cadastroPacienteCartao" name="cartao" value="{{ $paciente->cartao }}">
            </div>
            <div class="col">
            <label for="cadastroPacientePronturario" class="form-label">Número Prontuário</label>
                <input type="text" class="form-control" id="cadastroPacientePronturario" name="prontuario" value="{{ $paciente->prontuario }}">
            </div>
            <div class="col">
                <label for="cadastroPacienteStatus" class="form-label">Status</label>
                <select id="cadastroPacienteStatus" class="form-select" name="status">
                    <option value="{{ $paciente->status }}">{{ $paciente->status }}</option>
                    <option value="Ativo">Ativo</option>
                    <option value="Óbito">Óbito</option>
                </select>
            </div>
        </div>

        <br>

        <div class="row">
            <div class="col">
                <label for="cadastroPacienteEstado" class="form-label">Estado</label>
                <input type="text" class="form-control" id="cadastroPacienteEstado" name="estado" value="{{ $paciente->estado }}">
            </div>
            <div class="col">
                <label for="cadastroPacienteCidade" class="form-label">Cidade</label>
                <input type="text" class="form-control" id="cadastroPacienteCidade" name="cidade" value="{{ $paciente->cidade }}">
            </div>
            <div class="col">
                <label for="cadastroPacienteBairro" class="form-label">Bairro</label>
                <input type="text" class="form-control" id="cadastroPacienteBairro" name="bairro" value="{{ $paciente->bairro }}">
            </div>
            <div class="col">
                <label for="cadastroPacienteCep" class="form-label">CEP</label>
                <input type="text" class="form-control cep" id="cadastroPacienteCep" name="cep" value="{{ $paciente->cep }}">
            </div>
            
        </div>

        <br>

        <div class="row">        
            <div class="col-2">  
                <label for="cadastroPacienteLogradouro" class="form-label">Logradouro</label>
                <select id="cadastroPacienteLogradouro" class="form-select" name="logradouro">
                    <option>{{ $paciente->logradouro }}</option>
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
                <input type="text" class="form-control" id="cadastroPacienteDescricao" name="descricao" value="{{ $paciente->descricao }}">
            </div>
            <div class="col-2">    
                <label for="cadastroPacienteNumero" class="form-label">Número</label>
                <input type="text" class="form-control" id="cadastroPacienteNumero" name="numero" value="{{ $paciente->numero }}">
            </div>
        </div>

        <br>

        <div class="mb-3">
            <label for="cadastroPacienteComplemento" class="form-label">Complemento</label>
            <textarea class="form-control" id="cadastroPacienteComplemento" rows="3" name="complemento" value="{{ $paciente->complemento }}"></textarea>
        </div>

        <br>

        <div class="row">        
        <div class="col">
                <label for="exampleDataListArea" class="form-label">Area</label>
                <select id="cadastroPacienteLogradouro" name="area_id" class="form-select">
                @foreach($areas as $area)
                    @if ($area->id === $paciente->area_id)
                        <option value="{{ $area->id }}" selected>{{ $area->unidade }}</option>
                    @else
                        <option value="{{ $area->id }}">{{ $area->unidade }}</option>
                    @endif
                @endforeach
                </select>
            </div> 
            <div class="col">
                <label for="exampleDataListMicroarea" class="form-label">Microarea</label>
                <select id="cadastroPacienteLogradouro" name="microarea_id" class="form-select">
                @foreach($microareas as $microarea)
                    @if ($microarea->id === $paciente->microarea_id)
                        <option value="{{ $microarea->id }}">{{ $microarea->nome }}</option>
                    @else
                        <option value="{{ $microarea->id }}">{{ $microarea->nome }}</option>
                    @endif
                @endforeach
                </select>
            </div>    
            <div class="col">
                <label for="exampleDataListComunidade" class="form-label">Comunidade</label>
                <select id="cadastroPacienteLogradouro" name="comunidade_id" class="form-select">
                @foreach($comunidades as $comunidade)
                    @if ($comunidade->id === $paciente->comunidade_id)
                        <option value="{{ $comunidade->id }}">{{ $comunidade->nome }}</option>
                    @else
                        <option value="{{ $comunidade->id }}">{{ $comunidade->nome }}</option>
                    @endif
                @endforeach
                </select>
            </div>  
            <div class="col">
                <label for="exampleDataListFamilia" class="form-label">Familía</label>
                <select id="cadastroPacienteFamilia" name="familia_id" class="form-select">
                @foreach($familias as $familia)
                    @if ($familia->id === $paciente->familia_id)
                        <option value="{{ $familia->id }}">{{ $familia->numero }}</option>
                    @else
                        <option value="{{ $familia->id }}">{{ $familia->numero }}</option>
                    @endif
                @endforeach
                </select>
            </div>
        </div>

        <br>

        <div class="btn-group" role="group" aria-label="Basic example">
            <a class="btn btn-secondary" href="{{ url('admin/paciente/lista') }}">Voltar</a> 
            <button type="submit" class="btn btn-success">Salvar</button>  
        </div>
        
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