@extends('admin.home')

@section('title', 'Moradia e Saneamento')

@section('body_page')

    <div class="btn-group" role="group" aria-label="Basic outlined example">
        <a class="btn btn-outline-primary" href="{{ url('/admin/moradia/cadastro') }}">Cadastrar</a>
        <a class="btn btn-outline-success" href="{{ url('/admin/moradia/lista') }}">Listar</a>
    </div>
    
    <br><br>

    <main role='main'>
        @hasSection('body_moradia')
        @yield('body_moradia')
        @endif
    </main>

    <br>
@stop

