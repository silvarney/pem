<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Impressao</title>

    <style>
        html,body{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 12px;
        }
        
        .cabecalho{
            text-align: center;
            font-size: 16px;
        }

        .corpo{
            
        }

        .rodape{
            padding-top: 5%;
            text-align: center;
        }

        .lg-tb{
            width:25%;
        }

        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
            }

        #customers td, #customers th {
            border: 1px solid rgb(128, 127, 127);
            padding: 8px;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
        }

    </style>
</head>
<body>
    <div class="cabecalho">
        <img src="img/brasao.png" alt="some text" width=100 height=100>
        <p>
            PREFEITURA MUNICIPAL DE SÃO DOMINGOS DO CAPIM
            <br>
            SECRETARIA MUNICIPAL DE SAÚDE / COORD. DE ATENÇÃO BÁSICA
        </p>
    </div>

    <br>

    <div class="corpo">
        <span><strong>PERFIL EPIDEMIOLÓGICO, MORADIA E CONDIÇÕES DE SANEAMENTO BÁSICO.</strong></span>
        <br>
        <span>ESF: <b>{{ $unidade }}</b> - Período: <b>{{ date('d/m/Y', strtotime($inicio)) }}</b> - <b>{{ date('d/m/Y', strtotime($fim)) }}</b></span>

        <br><br>

        <h5>COMORBIDADES</h5>
        <table id="customers">
            <thead>
                <tr>
                    <th>Item</th>
                    <th>Tipo</th>
                    <th class="lg-tb">Quantidade</th>
                </tr>
            </thead>
            <tbody>
            @foreach($comorbidades as $comorbidade)
                <tr>
                    <td scope="row">
                        {{ $comorbidade->doenca }}
                        
                    </td>
                    <td>
                        {{ $comorbidade->tipo }}
                    </td>
                    <td>
                        {{ $comorbidade->quantidade }}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        
        <h4>PERFIL DEMOGRÁFICO</h4>
        <table id="customers">
            <thead>
                <tr>
                    <th>Item</th>
                    <th class="lg-tb">Quantidade</th>
                </tr>
            </thead>
            <tbody>
            @foreach($demograficos as $demografico)
                <tr>
                    <td scope="row">
                        {{ $demografico->item }}
                        
                    </td>
                    <td>
                        {{ $demografico->quantidade }}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <h4>SITUAÇÃO DE MORADIA E SANEAMENTO</h4>
        <table id="customers">
            <thead>
                <tr>
                    <th>Item</th>
                    <th class="lg-tb">Quantidade</th>
                </tr>
            </thead>
            <tbody>
            @foreach($moradias as $moradia)
                <tr>
                    <td scope="row">
                        {{ $moradia->item }}
                        
                    </td>
                    <td>
                        {{ $moradia->quantidade }}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <h5>ACOMPANHAMENTOS</h5>
        <table id="customers">
            <thead>
                <tr>
                    <th>Item</th>
                    <th class="lg-tb">Quantidade</th>
                </tr>
            </thead>
            <tbody>
            @foreach($acompanhamentos as $acompanhamento)
                <tr>
                    <td scope="row">
                        {{ $acompanhamento->item }}
                        
                    </td>
                    <td>
                        {{ $acompanhamento->quantidade }}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>

    <br>

    <div class="rodape">
        
        <hr width = 50% size = 3>
        <footer>Visto do Enfermeiro(a):</footer>
    </div>
    
</body>
</html>