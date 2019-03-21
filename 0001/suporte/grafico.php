<!doctype html>
<html lang="ept-BR">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../img/favicon.ico">

        <title>Meu Intercâmbio - Gráfico</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Principal CSS do Bootstrap -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
        <?php
        if (isset($_GET["grc"])) {
            switch ($_GET["grc"]) {
                case 1:
                    echo "<script src='js/grafico1.js'></script>";
                    break;
                
                case 2:
                    echo "<script src='js/grafico2.js'></script>";
                    break;

                default:
                    header('Location: dashboard.php');
                    break;
            }
        } else {
            header('Location: dashboard.php');
            exit;
        }
        ?>

        <style type="text/css">
            .principal {
                float: left;
                position: absolute;
                top:0;
                left:0;
                width: 100%;
                height: 100%;
                margin: 0px;
                padding: 10px 10px 5px 5px;
            }
        </style>

        <script type="text/javascript">
            setInterval(function () {
                document.getElementById("myChart").style.height = "0px";
                document.getElementById("myChart").style.height = "100%";
            }, 1);
        </script>
    </head>
    <body>
        
        <canvas id = 'myChart' class = 'principal'></canvas>

        <!--Optional JavaScript -->
        <!--jQuery first, then Popper.js, then Bootstrap JS -->
        <script src = "https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity = "sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin = "anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>