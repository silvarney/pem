@extends('admin.home')

@section('title', 'Cadastro - Moradia e Saneamento')

@section('body_page')

    <form action="{{ url('admin/update_moradia') }}" method="post">
    @csrf
        <input type="hidden" name="id" value="{{ $moradia->id }}">

        <div class="row">
            <div class="col">
                <label for="cadastroMoradiaItem" class="form-label">Item</label>
                <input class="form-control" list="datalistOptionsPaciente" id="cadastroMoradiaItem" name="item" value="{{ $moradia->item }}" placeholder="Selecione um Item...">
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
                <label for="cadastroMoradiaQuantidade" class="form-label">Quantidade</label>
                <input type="number" class="form-control" id="cadastroMoradiaQuantidade" name="quantidade" value="{{ $moradia->quantidade }}">
            </div>
            <div class="col-2">
                <label for="cadastroMoradiaInserido" class="form-label">Data</label>
                <input type="date" class="form-control" id="cadastroMoradiaInserido" name="inserido" value="{{ $moradia->inserido }}">
            </div>
        </div>

        <br>

        <button type="submit" class="btn btn-primary">Salvar</button>  
        <a class="btn btn-secondary" href="{{ url('admin/moradia/lista') }}">Voltar</a> 

    </form>
    <br>
@stop