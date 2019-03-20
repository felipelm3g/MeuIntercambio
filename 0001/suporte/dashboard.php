<!doctype html>
<html lang="ept-BR">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../img/favicon.ico">

        <title>Meu Intercâmbio - Dashboard</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Principal CSS do Bootstrap -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

    </head>
    <body>
        <header style="float: left; width: 100%;">
            <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                <a class="navbar-brand" href="#">
                    <img src="../img/icone.png" width="30" height="30" class="d-inline-block align-top" alt="">
                    Meu Intercâmbio
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Dashboard<span class="glyphicon glyphicon-euro"></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="vendas.php">Vendas<span class="glyphicon glyphicon-euro"></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="clientes.php">Clientes<span class="glyphicon glyphicon-euro"></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="relatorios.php">Relatórios<span class="glyphicon glyphicon-euro"></span></a>
                        </li>
                    </ul>
                    <a href="index.php"><button type="button" class="btn btn-outline-danger my-2 my-sm-0">Sair</button></a>
                </div>
            </nav>
        </header>

        <table class="table">
            <tbody>
                <tr>
                    <td width="25%">
                        <div style="width:100%;background-color:rgba(0,0,0,0.1);text-align:center;padding:10px;border-radius:3px;">
                            <img src="../img/users.png" width="60" style="margin: 10px;" />
                            <h3 style="opacity: 0.5;">Clientes</h3>
                            <h2>0</h2>
                        </div>
                    </td>
                    <td width="25%">
                        <div style="width:100%;background-color:rgba(0,0,0,0.1);text-align:center;padding:10px;border-radius:3px;">
                            <img src="../img/vendas.png" width="60" style="margin: 10px;" />
                            <h3 style="opacity: 0.5;">Vendas</h3>
                            <h2>0</h2>
                        </div>
                    </td>
                    <td width="25%">
                        <div style="width:100%;background-color:rgba(0,0,0,0.1);text-align:center;padding:10px;border-radius:3px;">
                            <img src="../img/bell.png" width="60" style="margin: 10px;" />
                            <h3 style="opacity: 0.5;">Chamados</h3>
                            <h2>1</h2>
                        </div>
                    </td>
                    <td width="25%">
                        <div style="width: 100%;background-color: rgba(0,0,0,0.1);text-align: center; padding: 10px;border-radius: 3px;">
                            <img src="../img/receber.png" width="60" style="margin: 10px;" />
                            <h3 style="opacity: 0.5;">A Receber</h3>
                            <h2>R$ 0,00</h2>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="border: 0px;" colspan="2" width="50%">
                        <div style="width: 100%;background-color: rgba(0,0,0,0.1);text-align: center; padding: 10px;border-radius: 3px;">
                            <img src="../img/receber.png" width="60" style="margin: 10px;" />
                            <h3 style="opacity: 0.5;">A Receber</h3>
                            <h2>R$ 0,00</h2>
                        </div>
                    </td>
                    <td style="border: 0px;" colspan="2" width="50%">
                        <div style="width: 100%;background-color: rgba(0,0,0,0.1);text-align: center; padding: 10px;border-radius: 3px;">
                            <img src="../img/receber.png" width="60" style="margin: 10px;" />
                            <h3 style="opacity: 0.5;">A Receber</h3>
                            <h2>R$ 0,00</h2>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>