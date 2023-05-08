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
    <!-- <span class="overlay" style="top:0px; left:0px">X</span> -->
        <?php

        // the file path is relative to index.php where this file is included
        require_once "../connections/connection.php";

        // Create a new DB connection
        $link = new_db_connection();

        /* create a prepared statement */
        $stmt = mysqli_stmt_init($link);
        $stmt2 = mysqli_stmt_init($link);

        $query = "";
        $query2 = "";
        
        ?>
    </div>
</body>

</html>