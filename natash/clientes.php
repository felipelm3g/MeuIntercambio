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
                    <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Logout</button>
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
                    <tr>
                        <th scope="row">1</th>
                        <td>Felipe Lopes</td>
                        <td>Av. Engenheiro Domingos Ferreira, 33</td>
                        <td><a href="#"><img src="img/lupa.png" width="25"/></a></td>
                        <td><button type="button" title="Editar">✎</button> &nbsp; <button type="button" title="Excluir">✖</button></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Natasha Silva</td>
                        <td>Av. Conselheiro Aguiar, 105</td>
                        <td><a href="#"><img src="img/lupa.png" width="25"/></a></td>
                        <td><button type="button" title="Editar">✎</button> &nbsp; <button type="button" title="Excluir">✖</button></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Henrique Cordeiro</td>
                        <td>Av. Alfredo Lisboa, 2044</td>
                        <td><a href="#"><img src="img/lupa.png" width="25"/></a></td>
                        <td><button type="button" title="Editar">✎</button> &nbsp; <button type="button" title="Excluir">✖</button></td>
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