<?php
$n1 = 0;
$n2 = 0;
$soma = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    $soma = $n1 + $n2;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Exercicio12 - Hildialex</title>
    <link rel="stylesheet" href="style.css">
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
            ?>
        </div>

        <div class="result">
            <br><i class="fa-solid fa-arrow-right fa-flip-horizontal" id="seta"></i><a href="principal.php"> Voltar</a>
        </div>
        </div>
    </div>
</body>
</html>