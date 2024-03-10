<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nota = $_POST["nota"];
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Exercicio7 - Hildialex</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form method="post">
            <label for="nota" name="nota">Digite a nota: </label>
            <input type="text" id="nota" name="nota">
        </form>
        <div class="result">
            <?php
            
            if ($nota >= 7) {
                echo "<br>Aprovado!";
            } else {
                echo "<br>Reprovado!";
            }

            ?>
        </div>

        <div class="result">
            <br><i class="fa-solid fa-arrow-right fa-flip-horizontal" id="seta"></i><a href="principal.php"> Voltar</a>
        </div>
    </div>
</body>
</html>