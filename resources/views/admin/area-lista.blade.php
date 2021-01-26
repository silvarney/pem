@extends('admin.posto-area')

@section('title', 'Lista - Area')

@section('body_area')

    <table class="table table-responsive-xl table-striped">
        <thead>
            <tr>
                <th scope="col">Unidade</th>
                <th scope="col">CNAE</th>
                <th scope="col">Bairro</th>
                <th scope="col">Descrição</th>
                <th scope="col">Criado em</th>
                <th scope="col">Status</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
        @foreach($areas as $area)
            <tr>
                <th scope="row">
                    {{ $area->unidade }}
                </th>
                <td>
                    {{ $area->cnae }}
                </td>
                <td>
                    {{ $area->bairro }}
                </td>
                <td>
                    {{ $area->descricao }}
                </td>
                <td>
                {{ date('H:i:s d/m/Y', strtotime($area->created_at)) }}
                </td>
                <td>
                    {{ $area->status }}
                </td>
                <td>
                <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                    @if ($area->area_status === 'publicada')
                        <form method="post" action="{{ url('conta/area_arq') }}">
                            {{ csrf_field() }}<input type="hidden" name="id" value="{{ $area->area_id }}">
                            <button type="submit" class="btn btn-success" ><i class="fas fa-check"></i></button>
                        </form>
                    @endif
                        <form method="post" action="{{ url('conta/area_del') }}">
                            {{ csrf_field() }}<input type="hidden" name="id" value="{{ $area->area_id }}">
                            <button type="submit" class="btn btn-danger" ><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table> 
    
    <br>


@stop