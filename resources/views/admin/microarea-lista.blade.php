@extends('admin.posto-microarea')

@section('title', 'Lista - Micromicroarea')

@section('body_microarea')

    <table class="table table-responsive-xl table-striped">
        <thead>
            <tr>
                <th scope="col">Micromicroarea</th>
                <th scope="col">microarea</th>
                <th scope="col">Agente de Saúde</th>
                <th scope="col">Criado em</th>
                <th scope="col">Status</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
        @foreach($microareas as $microarea)
            <tr>
                <th scope="row">
                    {{ $microarea->nome }}
                </th>
                <td>
                    {{ $microarea->area }}
                </td>
                <td>
                    {{ $microarea->funcionario }}
                </td>
                <td>
                {{ date('H:i:s d/m/Y', strtotime($microarea->created_at)) }}
                </td>
                <td>
                    {{ $microarea->status }}
                </td>
                <td>
                <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                    
                        <form method="post" action="{{ url('conta/microarea_del') }}">
                            {{ csrf_field() }}<input type="hidden" name="id" value="{{ $microarea->id }}">
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