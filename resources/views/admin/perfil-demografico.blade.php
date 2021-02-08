@extends('admin.home')

@section('title', 'Perfil Demografico')

@section('body_page')

    <div class="btn-group" role="group" aria-label="Basic outlined example">
        <a class="btn btn-outline-primary" href="{{ url('/admin/demografico/cadastro') }}">Cadastrar</a>
        <a class="btn btn-outline-success" href="{{ url('/admin/demografico/lista') }}">Listar</a>
    </div>
    
    <br><br>

    <main role='main'>
        @hasSection('body_demografico')
        @yield('body_demografico')
        @endif
    </main>

    <br>
@stop

