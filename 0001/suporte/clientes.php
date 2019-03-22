<!doctype html>
<html lang="ept-BR">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../img/favicon.ico">

        <title>Meu Intercâmbio - Clientes</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Principal CSS do Bootstrap -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <script>
            var url = window.location.href;
            url = url.split("#");

            window.onload = function (e) {
                try {
                    document.getElementById(url[1]).style.backgroundColor = '#3131';
                } catch (e) {

                }
            }
        </script>
        <style>
            .table tbody tr {
                -webkit-transition: 0.5s ease-in;
                -moz-transition: 0.5s ease-in;
                -o-transition: 0.5s ease-in;
                transition: 0.5s ease-in;
            }
        </style>
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
                        <li class="nav-item">
                            <a class="nav-link" href="dashboard.php">Dashboard<span class="glyphicon glyphicon-euro"></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="vendas.php">Vendas<span class="glyphicon glyphicon-euro"></span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="clientes.php">Clientes<span class="glyphicon glyphicon-euro"></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="chamados.php">Chamados<span class="glyphicon glyphicon-euro"></span></a>
                        </li>
<!--                        <li class="nav-item">
                            <a class="nav-link" href="relatorios.php">Relatórios<span class="glyphicon glyphicon-euro"></span></a>
                        </li>-->
                    </ul>
                    <a href="index.php"><button type="button" class="btn btn-outline-danger my-2 my-sm-0">Sair</button></a>
                </div>
            </nav>
        </header>

        <main style="float: left; width: 100%;padding: 15px;">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" style="border: 0px;">#</th>
                        <th scope="col" style="border: 0px;">Nome</th>
                        <th scope="col" style="border: 0px;">País</th>
                        <th scope="col" style="border: 0px;">Embarque</th>
                        <th scope="col" style="border: 0px;">Passagem</th>
                        <th scope="col" style="border: 0px;">Acomodação</th>
                        <th scope="col" style="border: 0px;">Seguro</th>
                        <th scope="col" style="border: 0px;">Venda</th>
                        <th scope="col" style="border: 0px;">Em dia</th>
                    </tr>
                </thead>
                <tbody>
                    <tr id="FelipeLopes">
                        <th scope="row">1</th>
                        <td>Felipe Lopes</td>
                        <td>Irlanda</td>
                        <td>05/04/2019</td>
                        <td>Sim</td>
                        <td>Sim</td>
                        <td>Sim</td>
                        <td><a href="vendas.php#A0A000"><b>A0A000</b></a></td>
                        <td>Sim</td>
                    </tr>
                    <tr id="JulianaSilva">
                        <th scope="row">2</th>
                        <td>Juliana Silva</td>
                        <td>Malta</td>
                        <td>05/04/2019</td>
                        <td>Sim</td>
                        <td>Sim</td>
                        <td>Sim</td>
                        <td><a href="vendas.php#A0A001"><b>A0A001</b></a></td>
                        <td>Sim</td>
                    </tr>
                    <tr id="LuaraNegreios">
                        <th scope="row">3</th>
                        <td>Luara Negreios</td>
                        <td>E.U.A</td>
                        <td>05/04/2019</td>
                        <td>Sim</td>
                        <td>Sim</td>
                        <td>Sim</td>
                        <td><a href="vendas.php#A0A002"><b>A0A002</b></a></td>
                        <td>Sim</td>
                    </tr>
                </tbody>
            </table>
        </main>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>