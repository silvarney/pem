@extends('admin.home')

@section('title', 'Cadastro - Acompanhamento')

@section('body_page')

    @component('alerta.alertas')
    @endcomponent

    <form action="{{ url('admin/create_acompanhamento') }}" method="post">
        @csrf

        <div class="row">
            <div class="col">
                <label for="cadastroAcompanhamentoItem" class="form-label">Item</label>
                <input class="form-control" list="datalistOptionsPaciente" id="cadastroAcompanhamentoItem" name="item" placeholder="Selecione um Item...">
                <datalist id="datalistOptionsPaciente">
                    @foreach ($acompanhamentos as $acompanhamento)
                        <option value="{{ $acompanhamento }}">    
                    @endforeach
                </datalist>
            </div>        
            <div class="col-2">
                <label for="cadastroAcompanhamentoQuantidade" class="form-label">Quantidade</label>
                <input type="number" class="form-control" id="cadastroAcompanhamentoQuantidade" name="quantidade">
            </div>
            <div class="col-2">
                <label for="cadastroAcompanhamentoInserido" class="form-label">Inserido</label>
                <input type="date" class="form-control" id="cadastroAcompanhamentoInserido" name="inserido">
            </div>
        </div>

        <br>

        <button type="submit" class="btn btn-primary">Salvar</button>  
    </form>
    <br>
@stop