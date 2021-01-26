@extends('admin.home')

@section('title', 'Cadastro - Acompanhamento')

@section('body_page')

    @component('alerta.sucesso-cadastro')
    @endcomponent

    <div class="row">
        <div class="col">
            <label for="exampleDataListPaciente" class="form-label">Paciente</label>
            <input class="form-control" list="datalistOptionsPaciente" id="exampleDataList" placeholder="Selecione um Paciente...">
            <datalist id="datalistOptionsPaciente">
                <option value="Antônia">
                <option value="Bruno">
                <option value="Carla">
            </datalist>
        </div>
        <div class="col-2">
                <label for="cadastroConsultaTipo" class="form-label">Tipo</label><br>
                <select id="cadastroConsultaTipo" class="form-select">
                    <option>DC Transmissíveis</option>
                    <option>DC Não Transmissíveis</option>
                    <option>Fatores de Risco</option>
                </select>
        </div>
        <div class="col">
            <label for="exampleDataListDoenca" class="form-label">Doença</label>
            <input class="form-control" list="datalistOptionsDoenca" id="exampleDataList" placeholder="Selecione uma Doença...">
            <datalist id="datalistOptionsDoenca">
                <option value="AIDS/HIV">
                <option value="Doença de Chagas">
                <option value="Hanseníase">
                <option value="Hepatite B/C">
            </datalist>
        </div>
    </div>

    <br>

    <button type="button" class="btn btn-success">Salvar</button>  
    
    <br>
@stop