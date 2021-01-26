@extends('admin.posto-comunidade')

@section('title', 'Cadastro - Comunidade')

@section('body_comunidade')

    @if (session('success'))
        @component('alerta.sucesso-cadastro')
        @endcomponent
    @endif

    <form action="{{ url('admin/create_comunidade') }}" method="post">
    @csrf

        <div class="row">
            <div class="col">
                <label for="cadastroAreaNome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="cadastroAreaNome" name="nome" placeholder="nome da comunidade">
            </div>
            <div class="col">
                <label for="exampleDataListArea" class="form-label">Area</label>
                <select id="cadastroAreaLogradouro" name="area_id" class="form-select">
                @foreach($areas as $area)
                    <option value="{{ $area->id }}">{{ $area->unidade }}</option>
                @endforeach
                </select>
            </div> 
            <div class="col">
                <label for="exampleDataListMicroarea" class="form-label">Microarea</label>
                <select id="cadastroAreaLogradouro" name="microarea_id" class="form-select">
                @foreach($microareas as $microarea)
                    <option value="{{ $microarea->id }}">{{ $microarea->nome }}</option>
                @endforeach
                </select>
            </div>        
        </div>

        <br>

        <button type="submit" class="btn btn-success">Salvar</button>  
        
        <br>

    </form>


@stop