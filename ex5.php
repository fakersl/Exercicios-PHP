<?php
$n1 = $n2 = $soma = $sub = $divisao = $multi = $potencia = '';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    $soma = $n1 + $n2;
    $sub = $n1 - $n2;
    $divisao = $n1 / $n2;
    $multi = $n1 * $n2;
    $potencia = $n1 ** $n2; //Aspas duplas servem para exponenciação de n1 elevado a $n2 :D!
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Exercicio5 - Hildialex</title>
</head>
<body>
<div class="container">
    <form method="post">
        <label for="n1">Digite o primeiro número:</label>
        <input type="text" id="n1" name="n1">
        <p>
        <label for="n2">Digite o segundo número:</label>
        <input type="text" id="n2" name="n2">
        </p>
        <button type="submit">Calcular</button>
    </form>
    <div class="result">
        <?php

            echo "<br>Soma: " . $soma;
            echo "<br>Subtração: " . $sub;
            echo "<br>Divisão: " . $divisao;
            echo "<br>Multiplição: " . $multi;
            echo "<br>Potencia: " . $potencia;
        ?>
    </div>

    <div class="result">
        <br><i class="fa-solid fa-arrow-right fa-flip-horizontal" id="seta"></i><a href="principal.php"> Voltar</a>
    </div>
</div>
</body>
</html>
