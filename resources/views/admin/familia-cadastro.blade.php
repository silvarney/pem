@extends('admin.posto-familia')

@section('title', 'Cadastro - Família')

@section('body_familia')

    @if (session('success'))
        @component('alerta.sucesso-cadastro')
        @endcomponent
    @endif

    <form action="{{ url('admin/create_familia') }}" method="post">
    @csrf

        <div class="row">
            <div class="col-2">
                <label for="cadastroFamiliaNome" class="form-label">Número</label>
                <input type="text" class="form-control" id="cadastroFamiliaNome" name="numero" placeholder="número da família">
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
            <div class="col">
                <label for="exampleDataListComunidade" class="form-label">Comunidade</label>
                <select id="cadastroAreaLogradouro" name="comunidade_id" class="form-select">
                @foreach($comunidades as $comunidade)
                    <option value="{{ $comunidade->id }}">{{ $comunidade->nome }}</option>
                @endforeach
                </select>
            </div>      
        </div>

        <br>

        <button type="submit" class="btn btn-primary">Salvar</button>  
        
        <br>
    </form>

@stop