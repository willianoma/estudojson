<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login | EspecializaTi</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href={{url('assets/painel/css/especializati.css')}}>
    <link rel="stylesheet" type="text/css" href={{url('assets/painel/css/especializati-responsivo.css')}}>


    <!--JQuery-->
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
</head>
<body class="bg-padrao">

<header>
    <h1 class="oculta">Login | EspecializaTi</h1>
</header>

<section class="login">
    <div class="topo-login">
        <h1 class="titulo-login"> {{$titulo or 'Login'}}</h1>
    </div>
    <div class="conteudo-login">

        @yield('form')

    </div>
</section>


<!-- Modal Recueração de Senha -->
<div class="modal fade" id="recuperarSenha" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-padrao2">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Recuperar Senha</h4>
            </div>
            <div class="modal-body">
                <form class="form-padrao">
                    <div class="form-group">
                        <input type="text" name="email" class="form-control" placeholder="E-mail">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Recuperar</button>
            </div>
        </div>
    </div>
</div>


<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

@yield('scripts')
</body>
</html>