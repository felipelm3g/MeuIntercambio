<!doctype html>
<html lang="pt-BR">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>CombustON - Login</title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="img/favicon.ico" />

        <!-- Estilos customizados para esse template -->
        <link href="css/signin.css" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
            function login() {
                var info = {
                    'email': document.getElementById('inputEmail').value,
                    'senha': document.getElementById('inputPassword').value,
                };

                var ajax1 = $.ajax({
                    url: "sys/forms/login.php",
                    type: 'POST',
                    data: info,
                    beforeSend: function () {
                        console.log("Validando login...");
                    }
                })
                        .done(function (data) {
                            if (data == 0 || data == '0') {
                                console.log("Login validado com sucesso.");
                                window.location.href = "posto.php";
                                return;
                            } else {
                                switch (parseInt(data)) {
                                    case 1:
                                        document.getElementById("texto").innerHTML = "E-mail não cadastrado ou inválido.";  
                                        $('#exampleModal').modal();
                                        console.log("E-mail não cadastrado ou inválido.");
                                        break;

                                    case 2:
                                        document.getElementById("texto").innerHTML = "Senha inválida.";
                                        $('#exampleModal').modal();
                                        console.log("Senha inválida.");
                                        break;
                                }
                                return;
                            }
                        })
                        .fail(function (jqXHR, textStatus, data) {
                            console.log(jqXHR + " - " + textStatus + " - " + data)
                            return;
                        });
            }
        </script>
    </head>
    <body class="text-center" cz-shortcut-listen="true">
        <form class="form-signin">
            <img class="mb-4" src="img/logo.png" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal" style="cursor: default;">Acesso CombustON</h1>
            <label for="inputEmail" class="sr-only">Endereço de email</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="E-mail" autocomplete="off" required="" autofocus="">
            <label for="inputPassword" class="sr-only">Senha</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Senha" autocomplete="off" required="">
            <div class="checkbox mb-3">
                <label>
<!--                    <input type="checkbox" value="remember-me"> Lembrar de mim-->
                    <a href="forget.php" style="text-decoration: none;color: rgba(0,0,0,0.7);" data-toggle="modal" data-target="#exampleModalLong">Esqueci minha senha</a>
                </label>
            </div>
            <button class="btn btn-lg btn-danger btn-block" onclick="login();" type="button">Login</button>
            <p class="mt-5 mb-3 text-muted" style="cursor: default;">© 2019</p>
        </form>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Login inválido</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="text-align: left;">
                        <p id="texto">teste</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>