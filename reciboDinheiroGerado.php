<?php
    $valor = $_POST["valor"];
    $nome_pagador = $_POST["nome_pagador"];
    $cpf_cnpj = $_POST["cpf_cnpj"];
    $referente = $_POST["referente"];
    $nome_emissor = $_POST["emissor"];
    $telefone = $_POST["telefone"];
    $cpf_cnpj_emissor = $_POST["cpf_cnpj_emissor"];
    $quem_recebeu_pix =$_POST["quem_recebeu_pix"];
    $instituicao_banco_pix = $_POST["instituicao_banco_pix"];
    $chave_pix = $_POST["chave_pix"];
    $n_cheque = $_POST["n_cheque"];
    $banco_cheque = $_POST["banco_cheque"];
    $agencia_cheque = $_POST["agencia_cheque"];
    $bom_para_cheque = $_POST["bom_para_cheque"];

    if($quem_recebeu_pix == null and $instituicao_banco_pix==null and $chave_pix==null and $n_cheque==null and $banco_cheque==null and $agencia_cheque==null and $bom_para_cheque==null){
        echo "________________________________________________________________________________________________________________________________________<br><br><br>";
        echo "Recebi(emos) de " .$nome_pagador ." cpf/cnpj nº ".$cpf_cnpj.", a importância de ".$valor." referente à ".$referente."<br>"."Nome do emisor: ".$nome_emissor."<br>"."Telefone: ".$telefone."<br><br><br>";
        echo "_________________________________________________________________________________________________________________________________________";
    
    }else if($quem_recebeu_pix !=null and $instituicao_banco_pix!=null and $chave_pix!=null){
        echo "________________________________________________________________________________________________________________________________________<br><br><br>";
        echo "Recebi(emos) de " .$nome_pagador." - CPF/CNPJ nº ".$cpf_cnpj.", a importância de ".$valor." reais referente à ".$referente.".<br>"."Para maior clareza firmo(amos) o presente recibo para que produza os seus efeitos, dando plena, rasa e irrevogável quitação, pelo valor recebido.<br>"."Pagamento recebido por: ".$quem_recebeu_pix." - chave pix: ".$chave_pix." - ".$instituicao_banco_pix."<br><br><br>"."______________________________<br><br>".$nome_emissor."<br>".$cpf_cnpj_emissor."<br>".$telefone."<br><br><br>";
        echo "_________________________________________________________________________________________________________________________________________";
    }else if($n_cheque!=null and $banco_cheque!=null and $agencia_cheque!=null and $bom_para_cheque!=null){
        echo "________________________________________________________________________________________________________________________________________<br><br><br>";
        echo "Recebi(emos) de ".$nome_pagador." - CPF/CNPJ nº ".$cpf_cnpj.", a importância de ".$valor." reais referente à ".$referente.".<br>".
        "Para maior clareza firmo(amos) o presente recibo para que produza os seus efeitos, dando plena, rasa e irrevogável quitação, pelo valor recebido.<br>
        
        O Pagamento foi efetuado através do cheque n°: ".$n_cheque." do Banco: ".$agencia_cheque.", Agência: ".$agencia_cheque.".<br>".
        
        "Para todos os fins de direito, a validade do presente Recibo fica condicionada ao recebimento do cheque acima identificado.
        
        Cheque bom para: ".$bom_para_cheque."<br>";

        echo "________________________________________________________________________________________________________________________________________<br><br><br>";
    }
?>


