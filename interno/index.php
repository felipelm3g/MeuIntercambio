<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../imgs/favicon.ico">

        <title>Meu Intercâmbio - Acesso Interno</title>

        <!-- Principal CSS do Bootstrap -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- Estilos customizados para esse template -->
        <link href="../css/signin.css" rel="stylesheet">

        <script type="text/javascript">
            function login() {
                window.location.href = "detalhes.php";
            }
        </script>
    </head>

    <body class="text-center" cz-shortcut-listen="true">
        <form class="form-signin">
            <img class="mb-4" src="../imgs/icone.png" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">Acesso Interno</h1>
            <label for="inputEmail" class="sr-only">Endereço de email</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Seu email" required="" autofocus="">
            <label for="inputPassword" class="sr-only">Senha</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required="">
            <div class="checkbox mb-3">
                <label>
                    <a href="#">Esqueci minha senha</a>
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" onclick="login();" type="button">Acessar</button>
            <p class="mt-5 mb-3 text-muted">© 2019</p>
        </form>
    </body>
</html>
