@extends('admin.home')

@section('title', 'Posto - Area')

@section('body_page')

    <div class="btn-group" role="group" aria-label="Basic outlined example">
        <a class="btn btn-outline-success" href="{{ url('/admin/posto/area/cadastro') }}">Cadastrar</a>
        <a class="btn btn-outline-primary" href="{{ url('/admin/posto/area/lista') }}">Listar</a>
    </div>
    
    <br><br>

    <main role='main'>
        @hasSection('body_area')
        @yield('body_area')
        @endif
    </main>

    <br>
@stop

