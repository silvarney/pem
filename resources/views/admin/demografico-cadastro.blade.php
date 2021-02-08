@extends('admin.perfil-demografico')

@section('title', 'Cadastro - Perfil Demográfico')

@section('body_demografico')

    @component('alerta.alertas')
    @endcomponent

    <form action="{{ url('admin/create_demografico') }}" method="post">
    @csrf

        <div class="row">
            <div class="col">
                <label for="cadastroDemograficoItem" class="form-label">Item</label>
                <input class="form-control" list="datalistOptionsPaciente" id="cadastroDemograficoItem" name="item" placeholder="Selecione um Item...">
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
                <input type="number" class="form-control" id="cadastroDemograficoQuantidade" name="quantidade">
            </div>
            <div class="col-2">
                <label for="cadastroDemograficoData" class="form-label">Data</label>
                <input type="date" class="form-control" id="cadastroDemograficoData" name="data">
            </div>
        </div>

        <br>

        <button type="submit" class="btn btn-primary">Salvar</button>  
    </form>
    <br>
@stop