<html>

<head>
    <title></title>
    <link rel="stylesheet" href="recibo.css">
</head>

<body class="container">



    <div class="row, box">
        <h1>
            <?php
            echo "Gerador de recibo";
            ?>
        </h1>
        <form action="reciboDinheiroGerado.php" method="post">
            <div class="row" style="display: flex; gap: 24px;">
                <div class="col">
                    Valor: <input type="number" name="valor"><br><br>
                </div>
                <div class="col">
                    Nome do pagador: <input type="string" name="nome_pagador"><br><br>
                </div>
            </div>

            <div class="row" style="display: flex; gap: 24px;">
                <div class="col">
                    CPF/CNPJ: <input type="string" name="cpf_cnpj"><br><br>
                </div>
                <div class="col">
                    Referente à: <input type="string" name="referente"><br><br>
                </div>
            </div>

            <div class="row" style="display: flex; gap: 24px;">
                <div class="col">
                    Cidade: <input type="string" name="cidade"><br><br><br>
                </div>
                <div class="col">
                    Data: <input type="date" name="data"><br><br><br>
                </div>
            </div>

            <div class="row" style="display: flex; gap: 24px;">
                <div class="col">
                    Nome do Emissor: <input type="string" name="emissor"><br><br>
                </div>
                <div class="col">
                    Telefone: <input type="string" name="telefone"><br><br>
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