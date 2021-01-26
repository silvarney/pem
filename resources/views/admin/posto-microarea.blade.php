@extends('admin.home')

@section('title', 'Posto - Microarea')

@section('body_page')

    <div class="btn-group" role="group" aria-label="Basic outlined example">
        <a class="btn btn-outline-success" href="{{ url('/admin/posto/microarea/cadastro') }}">Cadastrar</a>
        <a class="btn btn-outline-primary" href="{{ url('/admin/posto/microarea/lista') }}">Listar</a>
    </div>
    
    <br><br>

    <main role='main'>
        @hasSection('body_microarea')
        @yield('body_microarea')
        @endif
    </main>

    <br>
@stop

