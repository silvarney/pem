@extends('admin.home')

@section('title', 'Cadastro - Perfil Demográfico')

@section('body_page')

    <form action="{{ url('admin/update_demografico') }}" method="post">
    @csrf
        <input type="hidden" name="id" value="{{ $demografico->id }}">

        <div class="row">
            <div class="col">
                <label for="cadastroDemograficoItem" class="form-label">Item</label>
                <input class="form-control" list="datalistOptionsPaciente" id="cadastroDemograficoItem" name="item" value="{{ $demografico->item }}" placeholder="Selecione um Item...">
                <datalist id="datalistOptionsPaciente">
                    
                    <option value="Número de familías">    
                    <option value="Número de usuários">
                    <option value="Número de usuários acompanhados no mês">        
                    <option value="Número de domicílios">
                    <option value="Número de domicílios de veraneio/fechados/abandonados">
                    <option value="Número de igrejas">
                    
                </datalist>
            </div>        
            <div class="col-2">
                <label for="cadastroDemograficoQuantidade" class="form-label">Quantidade</label>
                <input type="number" class="form-control" id="cadastroDemograficoQuantidade" name="quantidade" value="{{ $demografico->quantidade }}">
            </div>
            <div class="col-2">
                <label for="cadastroDemograficoData" class="form-label">Data</label>
                <input type="date" class="form-control" id="cadastroDemograficoData" name="data" value="{{ $demografico->data }}">
            </div>
        </div>

        <br>

        <button type="submit" class="btn btn-primary">Salvar</button> 
        <a class="btn btn-secondary" href="{{ url('admin/demografico/lista') }}">Voltar</a> 

    </form>
    <br>
@stop