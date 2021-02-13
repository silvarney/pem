@extends('admin.home')

@section('title', 'Relatórios')

@section('body_page')
    
    <table class="table table-responsive-xl table-striped">
        <thead>
            <tr>
                <th scope="col"><h3>Relatórios</h3></th>
                <th scope="col">Período(início)</th>
                <th scope="col">Período(fim)</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            <form action="{{ url('admin/print_perfil') }}" method="post">
                <tr>@csrf
                    <th scope="row">
                        Perfil Epidemiológico
                    </th>
                    <td>
                        <input type="date" class="form-control" id="relatorioInicio" name="inicio">
                    </td>
                    <td>
                        <input type="date" class="form-control" id="relatorioFim" name="fim">
                    </td>
                    <td>
                        <button type="submit" class="btn btn-primary">Gerar</button>
                    </td>
                </tr>
            </form>
        </tbody>
    </table> 

    <br>
@stop