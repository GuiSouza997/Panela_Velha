<link rel="stylesheet" type="text/css" media="screen" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" />
<link type="text/css" rel="stylesheet" href="./estilos.css">
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Sistema de gerenciamento</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item active dropdown">
                <a class="nav-link dropdown-toggle" id="linkClientes" role="button" data-toggle="dropdown" href="#">Clientes</a>
                <div class="dropdown-menu" aria-labelledby="linkClientes">
                    <a class="dropdown-item" href="/clientes">Lista de clientes</a>
                    <a class="dropdown-item" href="/cliente/novo">Cadastro</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="linkClientes" role="button" data-toggle="dropdown" href="#">Departamentos</a>
                <div class="dropdown-menu" aria-labelledby="linkClientes">
                    <a class="dropdown-item" href="/departamentos">Lista de departamentos</a>
                    <a class="dropdown-item" href="/departamento/novo">Cadastro</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/about">about</a>
            </li>
        </ul>
        <span class="navbar-text">
      IBico solutions
    </span>
    </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-4 lg-4">
            <div class="div-checkbox" id="div-checkbox-pequena">
                <input type="checkbox" class="esconder-input-checkbox" name="m-pequena" id="m-pequena">
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-header">
                    Destaque
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item texto-centralizado">Cras justo odio</li>
                    <li class="list-group-item texto-centralizado">Dapibus ac facilisis in</li>
                    <li class="list-group-item texto-centralizado">Vestibulum at eros</li>
                </ul>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 lg-4">
            <div class="div-checkbox" id="div-checkbox-media">
                <input type="checkbox" class="esconder-input-checkbox" name="m-media" id="m-media">
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-header">
                    Destaque
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item texto-centralizado">Cras justo odio</li>
                    <li class="list-group-item texto-centralizado">Dapibus ac facilisis in</li>
                    <li class="list-group-item texto-centralizado">Vestibulum at eros</li>
                </ul>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 lg-4">
            <div class="div-checkbox" id="div-checkbox-grande">
                <input type="checkbox" class="esconder-input-checkbox" name="m-grande" id="m-grande">
            </div>
            <div class="card" style="width: 18rem;">
                <div class="card-header">
                    Destaque
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item texto-centralizado">Cras justo odio</li>
                    <li class="list-group-item texto-centralizado">Dapibus ac facilisis in</li>
                    <li class="list-group-item texto-centralizado">Vestibulum at eros</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
    $('document').ready(function() {
        $('#div-checkbox-pequena').click(function() {
            $('#div-checkbox-pequena').css({
                "border": "1px solid #fff"
            });
            $('#icon-media').remove();
            $('#icon-grande').remove();
            $('#div-checkbox-media').css({
                "border": "1px solid #c4c4c4"
            });
            $('#div-checkbox-grande').css({
                "border": "1px solid #c4c4c4"
            });
            $('#div-checkbox-pequena').html("<span style='text-align:center;'><img src='./images/correto.png' width='35' height='35' id='icon-pequena'></span>");
        })
        $('#div-checkbox-media').click(function() {
            $('#div-checkbox-media').css({
                "border": "1px solid #fff"
            });
            $('#div-checkbox-pequena').css({
                "border": "1px solid #c4c4c4"
            });
            $('#div-checkbox-grande').css({
                "border": "1px solid #c4c4c4"
            });
            $('#icon-pequena').remove();
            $('#icon-grande').remove();
            $('#div-checkbox-media').html("<span style='text-align:center;'><img src='./images/correto.png' width='35' height='35' id='icon-media'></span>");
        })
        $('#div-checkbox-grande').click(function() {
            $('#div-checkbox-grande').css({
                "border": "1px solid #fff"
            });
            $('#div-checkbox-pequena').css({
                "border": "1px solid #c4c4c4"
            });
            $('#div-checkbox-media').css({
                "border": "1px solid #c4c4c4"
            });
            $('#icon-pequena').remove();
            $('#icon-media').remove();
            $('#div-checkbox-grande').html("<span style='text-align:center;'><img src='./images/correto.png' width='35' height='35' id='icon-grande'></span>");
        })
    })
</script>