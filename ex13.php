<?php
$numero = 0;
$soma = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST["numero"];
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Exercicio13 - Hildialex</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form method="post">
        <label for="numero" id="numero" name="numero">Digite um número:  </label>
            <input type="number" id="numero" name="numero" required >
            <button type="submit">Enviar</button>        
        </form>
        <div class="result">
            <?php
            if ($numero > 0) {
                echo "<br>O número $numero é positivo!";
            } elseif ($numero < 0) {
                echo "<br>O número $numero é negativo!";
            } else { 
                echo "<br>O número digitado é igual a zero!";
            }
            ?>
        </div>

        <div class="result">
            <br><i class="fa-solid fa-arrow-right fa-flip-horizontal" id="seta"></i><a href="principal.php"> Voltar</a>
        </div>
        </div>
    </div>
</body>
</html>