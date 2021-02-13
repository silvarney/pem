@extends('admin.farmacia-estoque')

@section('title', 'Cadastro - Estoque')

@section('body_estoque')

    @component('alerta.alertas')
    @endcomponent

    <form action="{{ url('admin/create_estoque') }}" method="post">
    @csrf

        <div class="row">
            <div class="col-2">
                <label for="cadastroEstoqueCodigo" class="form-label">Código</label>
                <input class="form-control" id="cadastroEstoqueCodigo" name="codigo">
            </div>
            <div class="col">
                <label for="cadastroEstoqueProduto" class="form-label">Produto</label>
                <input class="form-control" id="cadastroEstoqueProduto" name="produto" placeholder="nome do produto">
            </div>
            <div class="col-2">
                <label for="cadastroEstoqueValidade" class="form-label">Validade</label>
                <input type="date" class="form-control" id="cadastroEstoqueValidade" name="validade">
            </div>        
            <div class="col-2">
                <label for="cadastroEstoqueQuantidade" class="form-label">Quantidade</label>
                <input type="number" class="form-control" id="cadastroEstoqueQuantidade" name="quantidade">
            </div>
        </div>

        <br>

        <button type="submit" class="btn btn-primary">Salvar</button>  
    </form>
    <br>
@stop