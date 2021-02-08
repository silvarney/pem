<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PEM</title>

    <!--
        <link rel="shortcut icon" type="image/png" href="{{ asset('img/icone.png') }}" />
    -->

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body>
    
    <div class="col-4 align-middle" >
        <img class="ima-logo" src="{{ asset('img/logo.png') }}">
    </div>

    <p class="txt_banner fw-normal bg-success">PEM - Perfil Epdemiológico Municipal</p>

    <div class="container">

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-outline-primary btn-lg" href="{{ url('admin') }}">Entrar</a>
        </div>

                  
    </div>
    

    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>