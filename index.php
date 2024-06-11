<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Primos</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Advent+Pro:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="quadrado">
        <h1>IDENTIFICADOR DE NÚMEROS PRIMOS</h1>
        <form method="get" action="index.php">
            <label for="">Digite o Número para saber se ele é Primo ou não:</label><br>
            <input type="number" placeholder="Ex: 2" class="campo" name="primo" min="1" required><br>
            <a href="index.php">
                <input type="submit" value="Verificar" class="verificar">
            </a>
    </div>

    <?php
    $primo = $_GET["primo"];

    function ehPrimo($num)
    {
        if ($num <= 1) {
            return false;
        }
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) {
                return false;
            }
        }
        return true;
    }

    if (ehPrimo($primo)) {
        echo " <div class='Resultado'>O número $primo é Primo!</div>";
    } else {
        echo " <div class='Resultado'>O número $primo NÃO é Primo!</div>";
    }

    ?>
</body>

</html>