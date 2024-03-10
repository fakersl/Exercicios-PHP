<?php
$n1 = 0;
$n2 = 0;
$soma = 0;
$sub = 0;
$divisao = 0;
$multi = 0;
$potencia = '';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    $soma = $n1 + $n2;
    $sub = $n1 - $n2;
    $divisao = $n1 / $n2;
    $multi = $n1 * $n2;
    $potencia = $n1 ** $n2; //Aspas duplas servem para exponenciação de n1 elevado a $n2 :D!
    $proximo = 10;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Exercicio6 - Hildialex</title>
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
            
            //LETRA A)
            if ($n1 > $n2) {
                echo "<br>O primeiro número é maior que o segundo!";
            } elseif ($n2 > $n1) {
                echo "<br>O segundo número é maior que o primeiro!";
            } else {
                echo "<br>Os números são iguais!";
            }
    
            //LETRA B)
            if ($n1 % 2 == 0){
                echo "<br>O primeiro número é par e o segundo é ímpar!";
            } elseif ($n2 % 2 == 0) {
                echo "<br>O segundo número é par e o primeiro é ímpar!";
            }

            //LETRA C)
            if (abs($n1 - 100) <= $proximo && abs($n2 - 100) <= $proximo) {
                echo "<br>Os dois números digitados estão proximos de 100!";
            } elseif (abs($n1-100) <= $proximo) {
                echo "<br>O primeiro número digitado está proximo de 100!";
            } elseif (abs($n2-100) <= $proximo) {
                echo "<br>O segundo número digitado está proximo de 100!";
            } else {
                echo "<br>Nenhum dos números digitados está proximo de 100!";
            }

            //LETRA D)
            if (abs($n1) < abs($n2)) {
                echo "<br>O primeiro número digitado está mais próximo de 0!";
            } elseif (abs($n2) < abs($n1)) {
                echo "<br>O segundo número digitado está mais próximo de 0!";
            } else {
                echo "<br>Os dois números digitados estão próximos de 0!";
            }

            # LETRA E)
            if ($n1 == $n2) {
                echo "<br>Os números digitados são iguais!";
            } else {
                echo "<br>Os números digitados são diferentes!";
            }
        ?>
    </div>

    <div class="result">
            <br><i class="fa-solid fa-arrow-right fa-flip-horizontal" id="seta"></i><a href="principal.php"> Voltar</a>
        </div>
</div>
</body>
</html>