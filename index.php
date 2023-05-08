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
        require_once "../basic-chat/connections/connection.php";

        // Create a new DB connection
        $link = new_db_connection();

        /* create a prepared statement */
        $stmt = mysqli_stmt_init($link);
        $stmt2 = mysqli_stmt_init($link);

        $query = "SELECT `img` FROM `tiles` ORDER BY `order` ASC";

        if (mysqli_stmt_prepare($stmt, $query)) {
            /* execute the prepared statement */
            if (mysqli_stmt_execute($stmt)) {
                /* bind result variables */
                mysqli_stmt_bind_result($stmt, $img);
                /* fetch values */
                while (mysqli_stmt_fetch($stmt)) {
                    echo "<img src='imageonline/$img' alt='Image $img'>";
                }
                $query2 = "SELECT `x_pos` ,`y_pos`  FROM `teams` WHERE `username` = 'PHP Masters'";
                if (mysqli_stmt_prepare($stmt2, $query2)) {
                    /* execute the prepared statement */
                    if (mysqli_stmt_execute($stmt2)) {
                        /* bind result variables */
                        mysqli_stmt_bind_result($stmt2, $pos_x, $pos_y);
                        /* fetch values */
                        while (mysqli_stmt_fetch($stmt2)) {
                            echo '<span class="overlay" style="top:'.$pos_y.'px; left:'.$pos_x.'px">X</span>';
                        }
                    }
                }else {
                    echo "Error:" . mysqli_stmt_error($stmt2);
                    echo ("Error description: " . mysqli_error($link));
                }
            /* close statement */
            mysqli_stmt_close($stmt);
            mysqli_stmt_close($stmt2);
        } else {
            echo "Error:" . mysqli_stmt_error($stmt);
            echo ("Error description: " . mysqli_error($link));
        }

        
        /* close connection */
        mysqli_close($link);
    }
        ?>
    </div>
</body>

</html>