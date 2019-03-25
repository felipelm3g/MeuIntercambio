<?php
session_start();
if (!isset($_SESSION['user'])) {
    session_destroy();
    header('Location: index.php');
    exit;
}
?>
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

        <title>CombustON - Clientes</title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="img/favicon.ico" />
        <script>
            function Logout() {
                document.getElementById("exampleModalLabel").innerHTML = "Tem certeza?";
                document.getElementById("texto").innerHTML = "Depois de deslogar não será mais possível acessar o sistema, a menos que se logue novamente.";
                document.getElementById("writebtn").innerHTML = "<button type='button' class='btn btn-secondary' data-dismiss='modal'>Não</button>";
                document.getElementById("writebtn").innerHTML += "<button type='button' onclick='window.location.href = \"sys/forms/deslogar.php\";' class='btn btn-primary'>Sim</button>";
                $('#exampleModal').modal();
            }
        </script>
    </head>
    <body>
        <header style="float: left;width: 100%;">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">
                    <img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt=""> CombustON</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="posto.php">Postos</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="clientes.php">Clientes</a>
                        </li>
                    </ul>
                    <button class="btn btn-outline-danger my-2 my-sm-0" type="button" onclick="Logout()">Logout</button>
                </div>
            </nav>
        </header>

        <main style="float: left;width: 100%;">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Endereço</th>
                        <th scope="col">Hist.</th>
                        <th scope="col">Opções</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once 'sys/class/Database.php';

                    //Cria conexão com banco de dados
                    $conexao = Database::conexao();

                    //Cria o comando SQL
                    $sql = "SELECT * FROM T_USER";

                    //Executa o comando SQL
                    $stmt = $conexao->query($sql);
                    
                    $contador = 1;
                    //Prepara o resultado em um Array[]
                    while ($consulta = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        echo "<tr>";
                        echo "<th scope='row'>{$contador}</th>";
                        echo "<td>{$consulta['USER_NOME']}</td>";
                        echo "<td>{$consulta['USER_END']}</td>";
                        echo "<td><a href='#'><img src='img/lupa.png' width='25'/></a></td>";
                        echo "<td><button type='button' title='Editar'>✎</button> &nbsp; <button type='button' title='Excluir'>✖</button></td>";
                        echo "<tr>";
                        
                        $contador++;
                    }

                    //Desfaz conexão com banco de dados
                    $conexao = null;
                    ?>
                </tbody>
            </table>
        </main>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p id="texto">teste</p>
                    </div>
                    <div class="modal-footer" id="writebtn">
                    </div>
                </div>
            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>