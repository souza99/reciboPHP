<html>

<head>
    <title></title>
    <link rel="stylesheet" href="recibo.css">
    <script src="camposBool.js" defer></script>
</head>

<body class="container">

    <div class="box">
        <h1>
            <?php
            echo "Gerador de recibo";
            ?>
        </h1>
        <form action="reciboDinheiroGerado.php" method="post">
            <div class="row" style="display: flex; gap: 24px;">
                <div class="col">
                    <h3>Valor: </h3>
                    <input type="number" name="valor"><br><br>
                </div>
                <div class="col">
                    <h3> Nome do pagador: </h3>
                    <input type="string" name="nome_pagador"><br><br>
                </div>
            </div>

            <div class="row" style="display: flex; gap: 24px;">
                <div class="col">
                    <h3> CPF/CNPJ: </h3>
                    <input type="string" name="cpf_cnpj"><br><br>
                </div>
                <div class="col">
                    <h3>Referente à: </h3>
                    <input type="string" name="referente"><br><br>
                </div>
            </div>

            <div class="row" style="display: flex; gap: 24px;">
                <div class="col">
                    <h3>Cidade: </h3>
                    <input type="string" name="cidade"><br><br><br>
                </div>
                <div class="col">
                    <h3>Data: </h3>
                    <input type="date" name="data"><br><br><br>
                </div>


            </div>

            <div class="row" style="display: flex; gap: 24px;">
                <div class="col">
                    <h3>Nome do Emissor: </h3>
                    <input type="string" name="emissor"><br><br>
                </div>
            </div>

            <div class="row" style="display: flex; gap: 24px;">
                <div class="col">
                    <h3>Telefone: </h3>
                    <input type="string" name="telefone"><br><br>
                </div>
                <div class="col">
                    <h3>CPF/CNPF: </h3>
                    <input type="string" name="cpf_cnpj_emissor"><br><br>
                </div>
            </div>

            <div class="col" style="justify-content: center;">
                <div class="row">
                    <h3>Forma de pagamento</h3>
                </div>
                <div class="row" style="display: flex;">
                    <input type="radio" id="dinheiro" name="drone" value="dinheiro">
                    <label for="dinheiro">Dinheiro</label>
                    <input type="radio" id="pix" name="drone" value="pix">
                    <label for="pix">Pix</label>
                    <input type="radio" id="cheque" name="drone" value="cheque">
                    <label for="cheque">Cheque</label>
                    <input type="radio" id="transferencia" name="drone" value="transferencia">
                    <label for="transferencia">Transferência/Depósito</label>
                    <input type="radio" id="cartao" name="drone" value="cartao">
                    <label for="cartao">Cartão de Crédito/Débito</label>
                </div>


                <div id="pixContainer" style="display: none;">

                    <div class="row itens" style="display: flex">

                        <div class="col" style="width: 100%">
                            <h3>Quem recebeu ?</h3>
                            <input type="string" name="quem_recebeu_pix" />
                        </div>

                        <div class="col" style="width: 100%">
                            <h3>Instituição/Banco: </h3>
                            <input type="string" name="instituicao_banco_pix" />
                        </div>

                        <div class="col" style="width: 100%">
                            <h3>Chave: </h3>
                            <input type="string" name="chave_pix" />
                        </div>

                    </div>

                </div>

                <div id="chequeContainer" style="display: none;">
                    <div class="row itens" style="display: flex">

                        <div class="col" style="width: 100%">
                            <h3>N° do cheque: </h3>
                            <input type="string" name="n_cheque" />
                        </div>

                        <div class="col" style="width: 100%">
                            <h3>Banco: </h3>
                            <input type="string" name="banco_cheque" />
                        </div>

                        <div class="col" style="width: 100%">
                            <h3>Agência: </h3>
                            <input type="string" name="agencia_cheque" />
                        </div>

                        <div class="col" style="width: 100%">
                            <h3>Bom para...: </h3>
                            <input type="string" name="bom_para_cheque" />
                            <p>Opcional</p>
                        </div>

                    </div>

                </div>

                <div id="transferenciaContainer" style="display: none">

                    <div class="itens row" style="display: flex;">

                        <div class="col" style="width: 100%;">
                            <h3>Conta: </h3>
                            <input type="string" name="conta_transferencia" />
                        </div>

                        <div class="col" style="width: 100%;">
                            <h3>Agência: </h3>
                            <input type="string" name="agencia_tranferencia" />
                        </div>

                        <div class="col" style="width: 100%;">
                            <h3>Data: </h3>
                            <input type="string" name="data_trandferencia" />
                        </div>

                    </div>

                    <div class="itens row" style="display: flex;">

                        <div class="col" style="width: 100%;">
                            <h3>Banco: </h3>
                            <input type="string" name="banco_transferencia" />
                        </div>

                        <div class="col" style="width: 100%;">
                            <h3>Favorecido: </h3>
                            <input type="string" name="favorecido_transferencia" />
                        </div>

                        <div class="col" style="width: 100%;">
                            <h3>Nº do documento: </h3>
                            <input type="string" name="n_do_documento_tranferencia" />
                        </div>

                    </div>

                </div>

            </div>

            <button class="buttons" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
                    <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z" />
                    <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z" />
                </svg> Gerar recibo</button>
        </form>
        
    </div>

</body>

</html>