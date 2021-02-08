@extends('admin.farmacia-estoque')

@section('title', 'Retirada')

@section('body_estoque')

    @if (session('success'))
    @component('alerta.sucesso-cadastro')
    @endcomponent
    @endif

    <form action="{{ url('admin/create_retirada') }}" method="post">
    @csrf

        <div class="row">
            <div class="col">
                <label for="estoqueRetiradaPaciente" class="form-label">Paciente</label>
                <select class="form-control" id="estoqueRetiradaPaciente" name="paciente_id">
                    @foreach ($pacientes as $paciente)
                        <option value="{{ $paciente->id }}">{{ $paciente->nome }}</option>    
                    @endforeach
                </select>
            </div>
            <div class="col">
                <label for="estoqueRetiradaMedicamento" class="form-label">Medicamento</label>
                <select class="form-control" id="estoqueRetiradaMedicamento" name="estoque_id">
                    @foreach ($estoques as $remedio)
                        <option value="{{ $remedio->id }}">{{ $remedio->produto }}</option>    
                    @endforeach
                </select>
            </div>
            <div class="col-2">
                <label for="estoqueRetiradaQuantidade" class="form-label">Quantidade</label><br>
                <input type="number" class="form-control" id="estoqueRetiradaQuantidade" name="quantidade">
        </div>
        </div>

        <br>

        <button type="submit" class="btn btn-primary">Salvar</button>  
    </form>
    <br>
@stop