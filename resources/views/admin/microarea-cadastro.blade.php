@extends('admin.posto-microarea')

@section('title', 'Cadastro - Microarea')

@section('body_microarea')

    @if (session('success'))
        @component('alerta.sucesso-cadastro')
        @endcomponent
    @endif

    <form action="{{ url('admin/create_microarea') }}" method="post">
    @csrf
        <div class="row">
            <div class="col">
                <label for="cadastroAreaNome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="cadastroAreaNome" name="nome" placeholder="nome da microarea">
            </div>
            <div class="col">
                <label for="exampleDataListAgente" class="form-label">Agente de Saúde</label>
                <select id="cadastroAreaLogradouro" name="funcionario_id" class="form-select">
                @foreach($agentes as $agente)
                    <option value="{{ $agente->id }}">{{ $agente->nome }}</option>
                @endforeach
                </select>
            </div>
            <div class="col">
                <label for="exampleDataListArea" class="form-label">Area</label>
                <select id="cadastroAreaLogradouro" name="area_id" class="form-select">
                @foreach($areas as $area)
                    <option value="{{ $area->id }}">{{ $area->unidade }}</option>
                @endforeach
                </select>
            </div>        
        </div>

        <br>

        <button type="submit" class="btn btn-primary">Salvar</button>  
        
        <br>

    </form>

@stop