@extends('admin.home')

@section('title', 'Cadastro - Consulta')

@section('body_page')

    @component('alerta.alertas')
    @endcomponent

    <form action="{{ url('admin/create_consulta') }}" method="post">
    @csrf

        <div class="row">
            <div class="col">
                <label for="cadastroConsultaPaciente" class="form-label">Paciente</label>
                <select class="form-select" id="cadastroConsultaPaciente" name="paciente_id">
                    @foreach ($pacientes as $paciente)
                    <option value="{{ $paciente->id }}">{{ $paciente->nome }}</option>    
                    @endforeach
                </select>
            </div>
            <div class="col-2">
                    <label for="cadastroConsultaTipo" class="form-label">Tipo</label>
                    <select id="cadastroConsultaTipo" class="form-select" name="tipo">
                        <option>Dentista</option>
                        <option>Enfermeiro</option>
                        <option>Médico</option>
                        <option>Vacinação</option>
                    </select>
            </div>
            <div class="col">
                <label for="cadastroConsultaProfissional" class="form-label">Profissional</label>
                <select class="form-select" id="cadastroConsultaProfissional" name="funcionario_id">
                    @foreach ($funcionarios as $funcionario)
                    <option value="{{ $funcionario->id }}">{{ $funcionario->nome }}</option>    
                    @endforeach
                </select>
            </div>
        </div>

        <br>

        <button type="submit" class="btn btn-primary">Salvar</button>  
    </form>
    <br>
@stop