<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Chat PHP - Mapa</title>
</head>

<body>
    <h1>Mapa DeCA (CCCI)</h1>
    <p>Cria o mapa do DeCA, recorrendo à tabela tiles da BD. Depois, descobre as coordenadas da tua equipa e posiciona o X.</p>
    <div class="map-container">
    <span class="overlay">X</span>
        <?php
        $numbers = range(0, 99);

    

        foreach ($numbers as $number) {
            $imageName = $number . ".png";
            echo "<img src='imageonline/$imageName' alt='Image $number'>";
        }
        ?>
    </div>
</body>

</html>