<?php

$n1 = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $n1 = $_POST["n1"];
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Exercicio4 - Hildialex</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form method="post">
            <label for="n1">Digite um número: </label>
                <input type="text" id="n1" name="n1" required>
                <button type="submit">Enviar</button>
            </form>
            <div class="result">
                <?php
                if ($n1 % 2 == 0) {
                    echo "<br>O número $n1 é par!";
                } else {
                    echo "<br>O número $n1 é ímpar!";
                }
                ?>
            </div>

            <div class="result">
                <br><i class="fa-solid fa-arrow-right fa-flip-horizontal" id="seta"></i><a href="principal.php"> Voltar</a>
            </div>
        </div>
</body>
</html>