@extends('admin.home')

@section('title', 'Farmácia - Estoque')

@section('body_page')

    <div class="btn-group" role="group" aria-label="Basic outlined example">
        <a class="btn btn-outline-primary" href="{{ url('/admin/farmacia/estoque/cadastro') }}">Cadastrar</a>
        <a class="btn btn-outline-success" href="{{ url('/admin/farmacia/estoque/lista') }}">Listar - Estoque</a>
        <a class="btn btn-outline-dark" href="{{ url('/admin/farmacia/estoque/retirada') }}">Retirada</a>
        <a class="btn btn-outline-success" href="{{ url('/admin/farmacia/retirada/lista') }}">Listar - Retirada</a>
    </div>
    
    <br><br>

    <main role='main'>
        @hasSection('body_estoque')
        @yield('body_estoque')
        @endif
    </main>

    <br>
@stop

