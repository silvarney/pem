@extends('admin.moradia-saneamento')

@section('title', 'Cadastro - Moradia e Saneamento')

@section('body_moradia')

    @component('alerta.alertas')
    @endcomponent

    <form action="{{ url('admin/create_moradia') }}" method="post">
    @csrf

        <div class="row">
            <div class="col">
                <label for="cadastroAcompanhamentoItem" class="form-label">Item</label>
                <input class="form-control" list="datalistOptionsPaciente" id="cadastroAcompanhamentoItem" name="item" placeholder="Selecione um Item...">
                <datalist id="datalistOptionsPaciente">
                    <option value="Com energia elétrica">    
                    <option value="Com energia elétrica">     
                    <option value="Com energia elétrica">
                    <option value="Água de poço">
                    <option value="Água encanada">
                    <option value="Água clorada">   
                    <option value="Água fervida">
                                
                </datalist>
            </div>        
            <div class="col-2">
                <label for="cadastroAcompanhamentoQuantidade" class="form-label">Quantidade</label>
                <input type="number" class="form-control" id="cadastroAcompanhamentoQuantidade" name="quantidade">
            </div>
            <div class="col-2">
                <label for="cadastroMoradiaData" class="form-label">Data</label>
                <input type="date" class="form-control" id="cadastroMoradiaData" name="data">
            </div>
        </div>

        <br>

        <button type="submit" class="btn btn-primary">Salvar</button>  
    </form>
    <br>
@stop