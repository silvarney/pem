@extends('admin.home')

@section('title', 'Lista - Paciente')

@section('body_page')

<!-- indice tab -->
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="paciente-tab" data-bs-toggle="tab" href="#paciente" role="tab" aria-controls="paciente" aria-selected="true">Paciente</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="comorbidade-tab" data-bs-toggle="tab" href="#comorbidade" role="tab" aria-controls="comorbidade" aria-selected="false">Comorbidades</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="acompanhamento-tab" data-bs-toggle="tab" href="#acompanhamento" role="tab" aria-controls="acompanhamento" aria-selected="false">Acompanhamento</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link btn btn-secondary btn-sm" id="acompanhamento-tab" href="{{ url('admin/paciente/lista') }}" role="tab" aria-controls="acompanhamento" aria-selected="false">Voltar</a>
  </li>
</ul>

<!-- conteudo -->
<div class="tab-content" id="myTabContent">
  <!--paciente-->
  <div class="tab-pane fade show active" id="paciente" role="tabpanel" aria-labelledby="paciente-tab">
    
    <div class="row">
        <div class="col-5">
            <label for="cadastroPacienteNome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="cadastroPacienteNome" value="{{ $paciente->nome }}" disabled>
        </div>
        <div class="col-2">
            <label for="cadastroPacienteNascimento" class="form-label">Nascimento</label>
            <input type="date" class="form-control" id="cadastroPacienteNascimento" value="{{ $paciente->nascimento }}" disabled>
        </div>
        <div class="col-1">
            <label for="cadastroPacienteIdade" class="form-label">Idade</label>
            <input type="text" class="form-control" id="cadastroPacienteIdade" disabled>
        </div>
        <div class="col-2">
                <label for="cadastroPacienteSexo" class="form-label">Sexo</label><br>
                <input type="text" class="form-control" id="cadastroPacienteSexo" value="{{ $paciente->sexo }}" disabled>
        </div>
        <div class="col-2">
            <label for="cadastroPacienteRaca" class="form-label">Raça</label>
            <input type="text" class="form-control" id="cadastroPacienteRaca" value="{{ $paciente->raca }}" disabled>
        </div>
    </div>

    <br>

    <div class="row">
        <div class="col">
            <label for="cadastroPacientePai" class="form-label">Pai</label>
            <input type="text" class="form-control" id="cadastroPacientePai" value="{{ $paciente->pai }}" disabled>
        </div>
        <div class="col">
            <label for="cadastroPacienteMae" class="form-label">Mãe</label>
            <input type="text" class="form-control" id="cadastroPacienteMae" value="{{ $paciente->mae }}" disabled>
        </div>
        <div class="col-3">
            <label for="cadastroPacienteNaturalidade" class="form-label">Naturalidade</label>
            <input type="text" class="form-control" id="cadastroPacienteNaturalidade" value="{{ $paciente->naturalidade }}" disabled>
        </div>
    </div>

    <br>

    <div class="row">        
        <div class="col">    
            <label for="cadastroPacienteFone" class="form-label">Fone</label>
            <input type="text" class="form-control fone" id="cadastroPacienteFone" value="{{ $paciente->fone }}" disabled>
        </div>
        <div class="col">
            <label for="cadastroPacienteRg" class="form-label">RG</label>
            <input type="text" class="form-control" id="cadastroPacienteRg" value="{{ $paciente->rg }}" disabled>
        </div>
        <div class="col">
        <label for="cadastroPacienteCpf" class="form-label">CPF</label>
            <input type="text" class="form-control cpf" id="cadastroPacienteCpf" value="{{ $paciente->cpf }}" disabled>
        </div>
        <div class="col">
        <label for="cadastroPacienteCartao" class="form-label">Cartão SUS</label>
            <input type="text" class="form-control" id="cadastroPacienteCartao" value="{{ $paciente->cartao }}" disabled>
        </div>
        <div class="col">
          <label for="cadastroPacientePronturario" class="form-label">Número Prontuário</label>
          <input type="text" class="form-control" id="cadastroPacientePronturario" value="{{ $paciente->prontuario }}" disabled>
        </div>
        <div class="col">
            <label for="cadastroPacienteStatus" class="form-label">Status</label>
            <input type="text" class="form-control" id="cadastroPacienteStatus" value="{{ $paciente->status }}" disabled>
        </div>
    </div>

    <br>

    <div class="row">
        <div class="col">
            <label for="cadastroPacienteEstado" class="form-label">Estado</label>
            <input type="text" class="form-control" id="cadastroPacienteEstado" value="{{ $paciente->estado }}" disabled>
        </div>
        <div class="col">
            <label for="cadastroPacienteCidade" class="form-label">Cidade</label>
            <input type="text" class="form-control" id="cadastroPacienteCidade" value="{{ $paciente->cidade }}" disabled>
        </div>
        <div class="col">
            <label for="cadastroPacienteBairro" class="form-label">Bairro</label>
            <input type="text" class="form-control" id="cadastroPacienteBairro" value="{{ $paciente->bairro }}" disabled>
        </div>
        <div class="col">
            <label for="cadastroPacienteCep" class="form-label">CEP</label>
            <input type="text" class="form-control cep" id="cadastroPacienteCep" value="{{ $paciente->cep }}" disabled>
        </div>
        
    </div>

    <br>

    <div class="row">        
        <div class="col-2">  
            <label for="cadastroPacienteLogradouro" class="form-label">Logradouro</label>
            <input type="text" class="form-control" id="cadastroPacienteStatus" value="{{ $paciente->logradouro }}" disabled>
        </div>
        <div class="col">    
            <label for="cadastroPacienteDescricao" class="form-label">Descricao</label>
            <input type="text" class="form-control" id="cadastroPacienteDescricao" value="{{ $paciente->descricao }}" disabled>
        </div>
        <div class="col-2">    
            <label for="cadastroPacienteNumero" class="form-label">Número</label>
            <input type="text" class="form-control" id="cadastroPacienteNumero" value="{{ $paciente->numero }}" disabled>
        </div>
    </div>

    <br>

    <div class="mb-3">
        <label for="cadastroPacienteComplemento" class="form-label">Complemento</label>
        <textarea class="form-control" id="cadastroPacienteComplemento" rows="3" disabled>{{ $paciente->complemento }}</textarea>
    </div>

    <br>

    <div class="row">        
      <div class="col">
            <label for="cadastroPacienteArea" class="form-label">Unidade</label>
            <input type="text" class="form-control" id="cadastroPacienteArea" value="{{ $paciente->unidade }}" disabled>
        </div> 
        <div class="col">
            <label for="cadastroPacienteMiroarea" class="form-label">Microarea</label>
            <input type="text" class="form-control" id="cadastroPacienteMiroarea" value="{{ $paciente->microarea }}" disabled>
        </div>    
        <div class="col">
            <label for="cadastroPacienteComunidade" class="form-label">Comunidade</label>
            <input type="text" class="form-control" id="cadastroPacienteComunidade" value="{{ $paciente->comunidade }}" disabled>
        </div>  
        <div class="col">
            <label for="cadastroPacienteFamilia" class="form-label">Familía</label>
            <input type="text" class="form-control" id="cadastroPacienteFamilia" value="{{ $paciente->familia }}" disabled>
        </div>
    </div>

    <br>

    <form method="post" action="{{ url('admin/paciente/show') }}">
        {{ csrf_field() }}<input type="hidden" name="id" value="{{ $paciente->id }}">
        <button type="submit" class="btn btn-primary" >Editar</button>
    </form>
        
    
  </div>
  
  <!--comorbidades-->
  <div class="tab-pane fade" id="comorbidade" role="tabpanel" aria-labelledby="comorbidade-tab">comorbidades</div>
  
  <!-- acompanhamentos -->
  <div class="tab-pane fade" id="acompanhamento" role="tabpanel" aria-labelledby="acompanhamento-tab">acompanhamento</div>
</div>

<script>
  window.onload = initPage;

      function initPage(){
          var nasc = document.getElementById('cadastroPacienteNascimento');
          calcular(nasc.value);
      }
      
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