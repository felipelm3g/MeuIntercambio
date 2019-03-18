<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../img/favicon.ico">

        <title>Meu Intercâmbio - Checkout</title>

        <!-- Principal CSS do Bootstrap -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- Estilos customizados para esse template -->
        <link href="css/form-validation.css" rel="stylesheet">
    </head>

    <body class="bg-light" cz-shortcut-listen="true">

        <div class="container">
            <div class="py-5 text-center">
                <img class="d-block mx-auto mb-4" src="../img/icone.png" alt="" width="72" height="72">
                <h2>Formulário de Fechamento</h2>
                <p class="lead">Preencha aqui as informações do fechamento do Intercâmbio</p>
            </div>

            <div class="row">
                <div class="col-md-4 order-md-2 mb-4">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Serviços</span>
                        <!--<span class="badge badge-secondary badge-pill">3</span>-->
                    </h4>
                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">Escola Premium</h6>
                                <small class="text-muted">Ace English Malta</small>
                            </div>
                            <span class="text-muted">R$4.500</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">Acomodação</h6>
                                <small class="text-muted">Hostel Mirante Malta - 30 dias</small>
                            </div>
                            <span class="text-muted">R$800</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">Seguro Viagem</h6>
                                <small class="text-muted">Cobertura GOLD</small>
                            </div>
                            <span class="text-muted">R$1.200</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between bg-light">
                            <div class="text-success">
                                <h6 class="my-0">Promoção Natal</h6>
                                <small>Desconto de 10%</small>
                            </div>
                            <span class="text-success">-R$650</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Total (BRL)</span>
                            <strong>R$5.850</strong>
                        </li>
                    </ul>
                    <ul class="list-group mb-3" style="cursor: default;">
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">Entrada</h6>
                                <small class="text-muted">Valor de entrada</small>
                            </div>
                            <span class="text-muted">R$1.000</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">Faturas 10x</h6>
                                <small class="text-muted">Valores de fatura</small>
                            </div>
                            <span class="text-muted">R$485</span>
                        </li>
                    </ul>

                    <!--                    <form class="card p-2">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Código promocional">
                                                <div class="input-group-append">
                                                    <button type="submit" class="btn btn-secondary">Resgatar</button>
                                                </div>
                                            </div>
                                        </form>-->
                </div>
                <div class="col-md-8 order-md-1">
                    <h4 class="mb-3">Dados Aluno</h4>
                    <form class="needs-validation" novalidate="">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="primeiroNome">Nome</label>
                                <input type="text" class="form-control" id="primeiroNome" placeholder="" value="" required="">
                                <div class="invalid-feedback">
                                    É obrigatório inserir um nome válido.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="sobrenome">Sobrenome</label>
                                <input type="text" class="form-control" id="sobrenome" placeholder="" value="" required="">
                                <div class="invalid-feedback">
                                    É obrigatório inserir um sobre nome válido.
                                </div>
                            </div>
                        </div>

                        <!--                        <div class="mb-3">
                                                    <label for="nickname">Nickname</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">@</span>
                                                        </div>
                                                        <input type="text" class="form-control" id="nickname" placeholder="Nickname" required="">
                                                        <div class="invalid-feedback" style="width: 100%;">
                                                            Seu nickname é obrigatório.
                                                        </div>
                                                    </div>
                                                </div>-->

                        <div class="mb-3">
                            <label for="email">Email<!--<span class="text-muted">(Opcional)</span>--></label>
                            <input type="email" class="form-control" id="email" placeholder="aluno@email.com">
                            <div class="invalid-feedback">
                                Por favor, insira um endereço de e-mail válido, para atualizações de entrega.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="endereco">Endereço</label>
                            <input type="text" class="form-control" id="endereco" placeholder="Rua exemplo, nº 0" required="">
                            <div class="invalid-feedback">
                                Por favor, insira o endereço do aluno.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="endereco2">Complemento<!--<span class="text-muted"> (Opcional)</span>--></label>
                            <input type="text" class="form-control" id="endereco2" placeholder="Complemento">
                        </div>

                        <div class="row">
                            <div class="col-md-5 mb-3">
                                <label for="pais">Estado</label>
                                <select class="custom-select d-block w-100" id="pais" required="">
                                    <option value="">Escolha...</option>
                                    <option>Brasil</option>
                                </select>
                                <div class="invalid-feedback">
                                    Por favor, escolha um país válido.
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="estado">Cidade</label>
                                <select class="custom-select d-block w-100" id="estado" required="">
                                    <option value="">Escolha...</option>
                                    <option>Acre</option>
                                </select>
                                <div class="invalid-feedback">
                                    Por favor, insira um estado válido.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="cep">CEP</label>
                                <input type="text" class="form-control" id="cep" placeholder="" required="">
                                <div class="invalid-feedback">
                                    É obrigatório inserir um CEP.
                                </div>
                            </div>
                        </div>
                        <hr class="mb-4">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="mesmo-endereco">
                            <label class="custom-control-label" for="mesmo-endereco">Endereço de entrega é o mesmo que o de cobrança.</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="salvar-info">
                            <label class="custom-control-label" for="salvar-info">Lembrar desta informação, na próxima vez.</label>
                        </div>
                        <hr class="mb-4">

                        <h4 class="mb-3">Informações de Pagamento</h4>

                        <div class="d-block my-3">
                            <div class="custom-control custom-radio">
                                <input id="10x" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
                                <label class="custom-control-label" for="10x">10x <span class="text-muted"> (Gerar uma fatura por mês durante 10 meses)</span></label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="12x" name="paymentMethod" type="radio" class="custom-control-input" required="">
                                <label class="custom-control-label" for="12x">12x <span class="text-muted"> (Gerar uma fatura por mês durante 12 meses)</span></label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="14x" name="paymentMethod" type="radio" class="custom-control-input" required="">
                                <label class="custom-control-label" for="14x">14x <span class="text-muted"> (Gerar uma fatura por mês durante 14 meses)</span></label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="pago" name="paymentMethod" type="radio" class="custom-control-input" required="">
                                <label class="custom-control-label" for="pago"><b>Pago</b> <span class="text-muted"> (Essa opção define que o intercâmbio foi pago totalmente pelo aluno)</span></label>
                            </div>
                        </div>
                        <!--                        <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <label for="cc-nome">Nome no cartão</label>
                                                        <input type="text" class="form-control" id="cc-nome" placeholder="" required="">
                                                        <small class="text-muted">Nome completo, como mostrado no cartão.</small>
                                                        <div class="invalid-feedback">
                                                            O nome que está no cartão é obrigatório.
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label for="cc-numero">Número do cartão de crédito</label>
                                                        <input type="text" class="form-control" id="cc-numero" placeholder="" required="">
                                                        <div class="invalid-feedback">
                                                            O número do cartão de crédito é obrigatório.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3 mb-3">
                                                        <label for="cc-expiracao">Data de expiração</label>
                                                        <input type="text" class="form-control" id="cc-expiracao" placeholder="" required="">
                                                        <div class="invalid-feedback">
                                                            Data de expiração é obrigatória.
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 mb-3">
                                                        <label for="cc-cvv">CVV</label>
                                                        <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
                                                        <div class="invalid-feedback">
                                                            Código de segurança é obrigatório.
                                                        </div>
                                                    </div>
                                                </div>-->
                        <hr class="mb-4">
                        <button class="btn btn-primary btn-lg btn-block" type="submit">Confirmar Intercâmbio</button>
                    </form>
                </div>
            </div>

            <footer class="my-5 pt-5 text-muted text-center text-small">
                <p class="mb-1">© 2017-2018 Meu Intercâmbio</p>
                <!--                <ul class="list-inline">
                                    <li class="list-inline-item"><a href="#">Privacidade</a></li>
                                    <li class="list-inline-item"><a href="#">Termos</a></li>
                                    <li class="list-inline-item"><a href="#">Suporte</a></li>
                                </ul>-->
            </footer>
        </div>

        <!-- Principal JavaScript do Bootstrap
        ================================================== -->
        <!-- Foi colocado no final para a página carregar mais rápido -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
        <script src="popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/holder.min.js"></script>
        <script>
            // Exemplo de JavaScript para desativar o envio do formulário, se tiver algum campo inválido.
            (function () {
                'use strict';

                window.addEventListener('load', function () {
                    // Selecione todos os campos que nós queremos aplicar estilos Bootstrap de validação customizados.
                    var forms = document.getElementsByClassName('needs-validation');

                    // Faz um loop neles e previne envio
                    var validation = Array.prototype.filter.call(forms, function (form) {
                        form.addEventListener('submit', function (event) {
                            if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                            }
                            form.classList.add('was-validated');
                        }, false);
                    });
                }, false);
            })();
        </script>
    </body>
</html>