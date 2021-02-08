@extends('admin.farmacia-estoque')

@section('title', 'Cadastro - Estoque')

@section('body_estoque')

    <form action="{{ url('admin/update_estoque') }}" method="post">
    @csrf
        <input type="hidden" name="id" value="{{ $estoque->id }}">

        <div class="row">
            <div class="col-2">
                <label for="cadastroEstoqueCodigo" class="form-label">Código</label>
                <input class="form-control" id="cadastroEstoqueCodigo" name="codigo" value="{{ $estoque->codigo }}">
            </div>
            <div class="col">
                <label for="cadastroEstoqueProduto" class="form-label">Produto</label>
                <input class="form-control" id="cadastroEstoqueProduto" name="produto" value="{{ $estoque->produto }}" placeholder="nome do produto">
            </div>
            <div class="col-2">
                <label for="cadastroEstoqueValidade" class="form-label">Validade</label>
                <input type="date" class="form-control" id="cadastroEstoqueValidade" name="validade" value="{{ $estoque->validade }}">
            </div>        
            <div class="col-2">
                <label for="cadastroEstoqueQuantidade" class="form-label">Quantidade</label>
                <input type="number" class="form-control" id="cadastroEstoqueQuantidade" name="quantidade" value="{{ $estoque->quantidade }}">
            </div>
        </div>

        <br>

        <button type="submit" class="btn btn-primary">Salvar</button>  
        <a class="btn btn-secondary" href="{{ url('admin/farmacia/estoque/lista') }}">Voltar</a> 
    </form>
    <br>
@stop