@extends('admin.posto-comunidade')

@section('title', 'Lista - Microcomunidade')

@section('body_comunidade')

    <table class="table table-responsive-xl table-striped">
        <thead>
            <tr>
                <th scope="col">Comunidade</th>
                <th scope="col">Microarea</th>
                <th scope="col">Area</th>
                <th scope="col">Criado em</th>
                <th scope="col">Status</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
        @foreach($comunidades as $comunidade)
            <tr>
                <th scope="row">
                    {{ $comunidade->nome }}
                </th>
                <td>
                    {{ $comunidade->microarea }}
                </td>
                <td>
                    {{ $comunidade->area }}
                </td>
                <td>
                {{ date('H:i:s d/m/Y', strtotime($comunidade->created_at)) }}
                </td>
                <td>
                    {{ $comunidade->status }}
                </td>
                <td>
                <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                    
                        <form method="post" action="{{ url('conta/comunidade_del') }}">
                            {{ csrf_field() }}<input type="hidden" name="id" value="{{ $comunidade->id }}">
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