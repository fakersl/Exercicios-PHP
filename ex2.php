<?php
$nome = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //pega o nome que o usuario digitou
    $nome = $_POST["nome"];
}

?>
<!--2- Crie uma variável para guardar um nome 
e depois imprima na tela este nome.-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio2 - Hildialex</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form method="post">
            <label for="nome">Digite o nome: </label>
            <input type="text" id="nome" name="nome" required>
            <button type="submit">Enviar</button>

            <div class="result">
                <?php echo "<br>Nome digitado: " . $nome; ?>
            </div>

            <div class="result">
                <br><i class="fa-solid fa-arrow-right fa-flip-horizontal" id="seta"></i><a href="principal.php"> Voltar</a>
            </div>
        </form>
    </div>
</body>
</html>