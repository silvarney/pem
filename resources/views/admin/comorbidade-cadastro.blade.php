@extends('admin.home')

@section('title', 'Cadastro - Comorbidade')

@section('body_page')

    @if (session('success'))
        @component('alerta.sucesso-cadastro')
        @endcomponent
    @endif

    <form action="{{ url('admin/create_comorbidade') }}" method="post">
    @csrf   

        <div class="row">
            <div class="col">
                <label for="cadastroComorbidadePaciente" class="form-label">Paciente</label>
                <select class="form-select" id="cadastroComorbidadePaciente" name="paciente_id">
                    @foreach ($pacientes as $paciente)
                        <option value="{{ $paciente->id }}">{{ $paciente->nome }}</option>    
                    @endforeach
                    
                    </select>
            </div>
            <div class="col-2">
                    <label for="cadastroComorbidadeTipo" class="form-label">Tipo</label><br>
                    <select id="cadastroComorbidadeTipo" name="tipo" class="form-select">
                        <option>DC Transmissíveis</option>
                        <option>DC Não Transmissíveis</option>
                        <option>Fatores de Risco</option>
                    </select>
            </div>
            <div class="col">
                <label for="cadastroComorbidadeDoenca" class="form-label">Doença</label>
                <input class="form-control" list="datalistOptionsDoenca" id="cadastroComorbidade" name="doenca" placeholder="Selecione uma Doença...">
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
    </form>
    <br>
@stop