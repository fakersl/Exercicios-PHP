<?php
$idade = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idade = $_POST["idade"];
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Exercicio15 - Hildialex</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form method="post">
            <label for="idade">Digite uma idade:</label>
            <input type="number" id="idade" name="idade" required>
            <button type="submit">Enviar</button>
        </form>
        <div class="result">
            <?php
            
            if ($idade < 18) {
                echo "<br>O(a) usuário(a) é menor de idade!";
            } elseif ($idade >= 60) {
                echo "<br>O(a) usuário(a) é idoso!";
            } else {
                echo "<br>O(a) usuário(a) é maior de idade!";
            }

            ?>
        </div>

        <div class="result">
            <br><i class="fa-solid fa-arrow-right fa-flip-horizontal" id="seta"></i><a href="principal.php"> Voltar</a>
        </div>
    </div>
</body>
</html>