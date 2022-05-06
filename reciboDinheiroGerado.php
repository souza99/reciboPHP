<?php
    $valor = $_POST["valor"];
    $nome_pagador = $_POST["nome_pagador"];
    $cpf_cnpj = $_POST["cpf_cnpj"];
    $referente = $_POST["referente"];
    $nome_emissor = $_POST["emissor"];
    $telefone = $_POST["telefone"];
    $quem_recebeu_pix =$_POST["quem_recebeu_pix"];
    $instituicao_banco_pix = $_POST["instituicao_banco_pix"];
    $chave_pix = $_POST["chave_pix"];

    if($quem_recebeu_pix == null and $instituicao_banco_pix==null and $chave_pix==null){
        echo "________________________________________________________________________________________________________________________________________<br><br><br>";
        echo "Recebi(emos) de " .$nome_pagador ." cpf/cnpj nº ".$cpf_cnpj.", a importância de ".$valor." referente à ".$referente."<br>"."Nome do emisor: ".$nome_emissor."<br>"."Telefone: ".$telefone."<br><br><br>";
        echo "_________________________________________________________________________________________________________________________________________";
    
    }else if($quem_recebeu_pix !=null and $instituicao_banco_pix!=null and $chave_pix!=null){
        echo "________________________________________________________________________________________________________________________________________<br><br><br>";
        echo "Recebi(emos) de " .$nome_pagador ." cpf/cnpj nº ".$cpf_cnpj.", a importância de ".$valor." referente à ".$referente."<br>"."Nome do emisor: ".$nome_emissor."<br>"."Telefone: ".$telefone."<br><br><br>";
        echo "_________________________________________________________________________________________________________________________________________";
    }
?>


