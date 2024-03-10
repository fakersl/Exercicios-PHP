<?php
$numInteiro = 1; //Numeros inteiros :P
$numFloat = 1.0; //Numeros com vírgula :O
$numString = "Hildialex"; //String :v
$numBooleanTrue = TRUE; //Boolean verdadeiro :s
$numBooleanFalse = FALSE; //Boolean falso >:)
$numCharacter = chr(49);//Character é baseado em Código ASCII :E
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio1 - Hildialex</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="result">Inteiro:
            <?php echo $numInteiro; ?>
        </div>

        <div class="result">Float: 
            <?php echo $numFloat; ?>
        </div>

        <div class="result">String: 
            <?php echo $numString; ?>
        </div>

        <div class="result">BooleanTrue: 
            <?php echo $numBooleanTrue ? 'Verdadeiro' : 'Falso'; ?>
        </div>

        <div class="result">BooleanFalse: 
            <?php echo $numBooleanFalse ? 'Verdadeiro' : 'Falso'; ?>
        </div>

        <div class="result">Character: 
            <?php echo $numCharacter;?>
        </div>

        <div class="result">
            <br><i class="fa-solid fa-arrow-right fa-flip-horizontal" id="seta"></i><a href="principal.php"> Voltar</a>
        </div>
        
    </div>
</body>
</html>