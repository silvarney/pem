@extends('admin.home')

@section('title', 'Posto - Comunidade')

@section('body_page')

    <div class="btn-group" role="group" aria-label="Basic outlined example">
        <a class="btn btn-outline-primary" href="{{ url('/admin/posto/comunidade/cadastro') }}">Cadastrar</a>
        <a class="btn btn-outline-success" href="{{ url('/admin/posto/comunidade/lista') }}">Listar</a>
    </div>
    
    <br><br>

    <main role='main'>
        @hasSection('body_comunidade')
        @yield('body_comunidade')
        @endif
    </main>

    <br>
@stop

