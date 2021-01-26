@extends('admin.home')

@section('title', 'Cadastro - Consulta')

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
                    <option>Dentista</option>
                    <option>Enfermeiro</option>
                    <option>Médico</option>
                    <option>Vacinação</option>
                </select>
        </div>
        <div class="col">
            <label for="exampleDataListProfissional" class="form-label">Profissional</label>
            <input class="form-control" list="datalistOptionsProfissional" id="exampleDataList" placeholder="Selecione um Profissional...">
            <datalist id="datalistOptionsProfissional">
                <option value="Vulano">
                <option value="Beltrano">
                <option value="Ciclano">
            </datalist>
        </div>
    </div>

    <br>

    <button type="button" class="btn btn-success">Salvar</button>  
    
    <br>
@stop