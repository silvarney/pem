@extends('admin.home')

@section('title', 'Cadastro - Comorbidade')

@section('body_page')

    <form action="{{ url('admin/update_comorbidade') }}" method="post">
    @csrf   
        <input type="hidden" name="id" value="{{ $comorbidade->id }}">

        <div class="row">
            <div class="col">
                <label for="cadastroComorbidadePaciente" class="form-label">Paciente</label>
                <select class="form-select" id="cadastroComorbidadePaciente" name="paciente_id">
                    @foreach ($pacientes as $paciente)
                        @if ($paciente->id === $comorbidade->paciente_id)
                            <option value="{{ $paciente->id }}" selected>{{ $paciente->nome }}</option>    
                        @else
                            <option value="{{ $paciente->id }}">{{ $paciente->nome }}</option>    
                        @endif
                    @endforeach
                    
                    </select>
            </div>
            <div class="col-2">
                    <label for="cadastroComorbidadeTipo" class="form-label">Tipo</label><br>
                    <select id="cadastroComorbidadeTipo" name="tipo" class="form-select">
                        <option>DC Transmissíveis</option>
                        <option>DC Não Transmissíveis</option>
                        <option>Fatores de Risco</option>
                        <option selected>{{ $comorbidade->tipo }}</option>
                    </select>
            </div>
            <div class="col">
                <label for="cadastroComorbidadeDoenca" class="form-label">Doença</label>
                <input class="form-control" list="datalistOptionsDoenca" id="cadastroComorbidade" name="doenca" value="{{ $comorbidade->doenca }}" placeholder="Selecione uma Doença...">
                <datalist id="datalistOptionsDoenca">
                    <option value="AIDS/HIV">
                    <option value="Doença de Chagas">
                    <option value="Hanseníase">
                    <option value="Hepatite B/C">
                </datalist>
            </div>
        </div>

        <br>

        <button type="submit" class="btn btn-primary">Salvar</button>  
        <a class="btn btn-secondary" href="{{ url('admin/comorbidade/lista') }}">Voltar</a> 

    </form>
    <br>
@stop