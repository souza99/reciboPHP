<html>
<head>
    <title></title>
</head>

<body>
    <p>
        <?php
        echo "site para os pedar(recomendado) HOSTINGER";
        ?>
    </p>
    <h1>
        <?php
        $valor1 = 10;
        $valor2 = 5;
    echo "Olá Mundo PHP ".($valor1+$valor2);
    ?>
    </h1>


    <form action="conta.php" method="post">
        valor1: <input type="number" name="valor1"><br><br>
        valor2: <input type="number" name="valor2"><br><br>
        <input type="submit">
    </form>
</body>

</html>