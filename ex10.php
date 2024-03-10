<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Exercicio10 - Hildialex</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="result">Números impressos:<br>
            <?php 
            
            for ($x = 10; $x >= 1; $x--){
                echo $x . "<br>";
            } 
            
            ?>
        </div>

        <div class="result">
            <br><i class="fa-solid fa-arrow-right fa-flip-horizontal" id="seta"></i><a href="principal.php"> Voltar</a>
        </div>
    </div>
</body>
</html>