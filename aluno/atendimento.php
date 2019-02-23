<!DOCTYPE html>
<?php
$pf = [
    "cpf" => "01625439210",
    "nome" => "Felipe Lopes",
    "email" => "felipe.lm@hotmail.com.br",
    "pais" => "Estados Unidos",
    "embarq" => "03/04/2019",
    "img" => "",
];
?>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Meu Intercâmbio - Atendimento</title>

        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js" integrity="sha384-0pzryjIRos8mFBWMzSSZApWtPl/5++eIfzYmTgBBmXYdhvxPc+XcFEk+zJwDgWbP" crossorigin="anonymous"></script>

        <!-- Favicon -->
        <link rel="shortcut icon" href="../imgs/favicon.ico" />

        <!-- Principal CSS do Bootstrap -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- Estilos customizados para esse template -->
        <link href="../css/atendimento.css" rel="stylesheet">
    </head>
    <body cz-shortcut-listen="true">

        <header>
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <a class="navbar-brand" href="#">
                    <img src="../imgs/icone.png" width="30" height="30" class="d-inline-block align-top" alt="">
                    Meu Intercâmbio
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                    </ul>
                    <a href="index.php"><button type="button" class="btn btn-outline-danger my-2 my-sm-0">Sair</button></a>
                </div>
            </nav>
        </header>

        <main role="main" style="float: left; width: 100%;padding: 25px 100px 25px 100px; margin-top: 56px;">
            <div class="divstyle" style=" width: 260px;">
                <div class="divpais" style="<?php
                switch ($pf["pais"]) {
                    case "Australia":
                        echo "background-image: url('../imgs/australia.jpg')";
                        break;
                    case "Canada":
                        echo "background-image: url('../imgs/canada.jpg')";
                        break;
                    case "Estados Unidos":
                        echo "background-image: url('../imgs/estadosunidos.jpg')";
                        break;
                    case "Inglaterra":
                        echo "background-image: url('../imgs/inglaterra.jpg')";
                        break;
                    case "Irlanda":
                        echo "background-image: url('../imgs/irlanda.jpg')";
                        break;
                    case "Malta":
                        echo "background-image: url('../imgs/malta.jpg')";
                        break;
                }
                ?>">
                    <div class="divimgprofile" style="<?php
                    if ($pf["img"] == "") {
                        echo "background-image: url('../imgs/user.jpg');";
                    } else {
                        echo "background-image: url('" . $pf["img"] . "');";
                    }
                    ?>">
                    </div>
                </div>
                <div class="detalis">
                    <h5><?php echo $pf["nome"]; ?></h5>
                    <p><?php echo $pf["email"]; ?></p>
                </div>
                <ul class="divmenu">
                    <a href="detalhes.php"><li><img src="../imgs/world.png" /> &nbsp; Detalhes</li></a>
                    <a href="financeiro.php"><li><img src="../imgs/coin.png" /> &nbsp; Financeiro</li></a>
                    <a href="documentos.php"><li><img src="../imgs/file.png" /> &nbsp; Documentos</li></a>
                    <a href="atendimento.php"><li><img src="../imgs/conversation.png" /> &nbsp; Atendimento</li></a>
                </ul>
            </div>
            <div class="divstyle" style="width: calc(100% - 280px);margin-left: 20px; padding: 25px;">

            </div>
        </main>

        <script type="text/javascript" src="../js/contato2.js"></script>

        <!-- Principal JavaScript do Bootstrap
        ================================================== -->
        <!-- Foi colocado no final para a página carregar mais rápido -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="../js/jquery-slim.min.js"></script>
        <script src="../js/popper.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    </body>
</html>

