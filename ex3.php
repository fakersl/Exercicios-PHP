<?php
$idade = ""; //Inicializando a variável

//Solicitação HTTP 
if ($_SERVER["REQUEST_METHOD"] == "POST"){ //Se o formulário foi enviado..
    $idade = $_POST["idade"];//Ele retorna a variável
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Exercicio3 - Hildialex</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form method="post">
            <!-- Adicione um campo de entrada para a idade -->
            <label for="idade">Digite sua idade:</label>
            <input type="number" id="idade" name="idade" required>
            <button type="submit">Enviar</button>
        </form>
        <div class="result">Sua idade é:
            <?php 
                echo $idade;
            ?>
        </div>

        <div class="result">
            <br><i class="fa-solid fa-arrow-right fa-flip-horizontal" id="seta"></i><a href="principal.php"> Voltar</a>
        </div>
    </div>
</body>
</html>