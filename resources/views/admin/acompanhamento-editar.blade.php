@extends('admin.home')

@section('title', 'Editar - Acompanhamento')

@section('body_page')

    @component('alerta.alertas')
    @endcomponent

    <form action="{{ url('admin/update_acompanhamento') }}" method="post">
        @csrf

        <input type="hidden" name="id" value="{{ $acompanhamento->id }}">

        <div class="row">
            <div class="col">
                <label for="editarAcompanhamentoItem" class="form-label">Item</label>
                <input class="form-control" list="datalistOptionsPaciente" id="editarAcompanhamentoItem" name="item" value="{{ $acompanhamento->item }}" placeholder="Selecione um Item...">
                <datalist id="datalistOptionsPaciente">
                    @foreach ($itens as $item)
                        <option value="{{ $item }}">    
                    @endforeach
                </datalist>
            </div>        
            <div class="col-2">
                <label for="editarAcompanhamentoQuantidade" class="form-label">Quantidade</label>
                <input type="number" class="form-control" id="editarAcompanhamentoQuantidade" name="quantidade" value="{{ $acompanhamento->quantidade }}">
            </div>
            <div class="col-2">
                <label for="editarAcompanhamentoInserido" class="form-label">Inserido</label>
                <input type="date" class="form-control" id="editarAcompanhamentoInserido" name="inserido" value="{{ $acompanhamento->inserido }}">
            </div>
        </div>

        <br>

        <button type="submit" class="btn btn-primary">Salvar</button> 
        <a class="btn btn-secondary" href="{{ url('admin/acompanhamento/lista') }}">Voltar</a>  
    </form>
    <br>
@stop