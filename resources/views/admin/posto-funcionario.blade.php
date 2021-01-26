@extends('admin.home')

@section('title', 'Posto - Funcionário')

@section('body_page')

    <div class="btn-group" role="group" aria-label="Basic outlined example">
        <a class="btn btn-outline-success" href="{{ url('/admin/posto/funcionario/cadastro') }}">Cadastrar</a>
        <a class="btn btn-outline-primary" href="{{ url('/admin/posto/funcionario/lista') }}">Listar</a>
    </div>
    
    <br><br>

    <main role='main'>
        @hasSection('body_funcionario')
        @yield('body_funcionario')
        @endif
    </main>

    <br>
@stop

