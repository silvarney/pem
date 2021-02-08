@extends('admin.home')

@section('title', 'Posto - Família')

@section('body_page')

    <div class="btn-group" role="group" aria-label="Basic outlined example">
        <a class="btn btn-outline-primary" href="{{ url('/admin/posto/familia/cadastro') }}">Cadastrar</a>
        <a class="btn btn-outline-success" href="{{ url('/admin/posto/familia/lista') }}">Listar</a>
    </div>
    
    <br><br>

    <main role='main'>
        @hasSection('body_familia')
        @yield('body_familia')
        @endif
    </main>

    <br>
@stop

