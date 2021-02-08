@if (session('success'))

    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}<strong>, foi cadastrado(a) com sucesso!</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

@elseif(session('update'))
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        {{ session('update') }}<strong>, foi atualizado(a) com sucesso!</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

@elseif(session('delete'))

    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{ session('delete') }}<strong>, foi deletado(a) com sucesso!</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

@elseif(session('naoencontrado'))

    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('naoencontrado') }}<strong>, não foi encontrado!</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

@endif