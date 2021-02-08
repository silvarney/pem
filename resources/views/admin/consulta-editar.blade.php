@extends('admin.home')

@section('title', 'Editar - Consulta')

@section('body_page')

    <form action="{{ url('admin/update_consulta') }}" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $consulta->id }}">

        <div class="row">
            <div class="col">
                <label for="editarConsultaPaciente" class="form-label">Paciente</label>
                <select class="form-select" id="editarConsultaPaciente" name="paciente_id">
                    @foreach ($pacientes as $paciente)
                        @if ($paciente->id === $consulta->paciente_id)
                            <option value="{{ $paciente->id }}" selected>{{ $paciente->nome }}</option>    
                        @else
                            <option value="{{ $paciente->id }}">{{ $paciente->nome }}</option>        
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="col-2">
                    <label for="editarConsultaTipo" class="form-label">Tipo</label>
                    <select id="editarConsultaTipo" class="form-select" name="tipo">
                        <option>{{ $consulta->tipo }}</option>
                        <option>Dentista</option>
                        <option>Enfermeiro</option>
                        <option>Médico</option>
                        <option>Vacinação</option>
                    </select>
            </div>
            <div class="col">
                <label for="editarConsultaProfissional" class="form-label">Profissional</label>
                <select class="form-select" id="editarConsultaProfissional" name="funcionario_id">
                    @foreach ($funcionarios as $funcionario)
                        @if ($funcionario->id === $consulta->funcionario_id)
                            <option value="{{ $funcionario->id }}" selected>{{ $funcionario->nome }}</option>        
                        @else
                            <option value="{{ $funcionario->id }}">{{ $funcionario->nome }}</option>  
                        @endif
                    @endforeach
                </select>
            </div>
        </div>

        <br>

        <button type="submit" class="btn btn-primary">Salvar</button> 
        <a class="btn btn-secondary" href="{{ url('admin/consulta/lista') }}">Voltar</a> 
    </form>
    <br>
@stop