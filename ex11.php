<?php

$cont = 0;
$numero = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST"){ 
    $numero = $_POST["numero"];
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Exercicio11 - Hildialex</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form method="post">
            <label for="numero" id="numero" name="numero">Digite um numero:</label>
            <input type="text" id="numero" name="numero" required>
            <button type="submit">Enviar</button>
        </form>
        <div class="result">
            <?php

            for ($cont = 0; $cont <= 10; $cont++) {
                echo "<br>$numero x $cont = " . ($numero * $cont) . "";
            }
            ?>
        </div>

        <div class="result">
            <br><i class="fa-solid fa-arrow-right fa-flip-horizontal" id="seta"></i><a href="principal.php"> Voltar</a>
        </div>
    </div>
</body>
</html>