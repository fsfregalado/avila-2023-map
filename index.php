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
    <h1>Mapa</h1>
    <div class="map-container">
        <span class="overlay">X</span>
        <?php
        // $host = 'localhost';
        // $username = 'root';
        // $password = '';
        // $database = 'deca_23_BDTSS_99';

        $host = 'labmm.clients.ua.pt';
        $username = 'deca_23_BDTSS_99_web';
        $password = 'CaM3D26d';
        $database = 'deca_23_bdtss_99';

        $connection = mysqli_connect($host, $username, $password, $database);

        $query = "SELECT `order` FROM `tiles`";
        $result = mysqli_query($connection, $query);

        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
        }

        if ($result) {
            while ($row = $result->fetch_object()) {
                $number = $row->order;
                $imageName = '0' . $number . ".png";
                echo "<img src=\"imageonline/$imageName\" alt=\"Image\">";
            }
        } else {
            echo "Error retrieving image order from the database: " . mysqli_error($connection);
        }

        // $numbers = range(0, 99);

        // foreach ($numbers as $number) {
        //     $imageName = '0' . $number . ".png";
        //     echo "<img src='imageonline/$imageName' alt='Image $number'>";
        // }
        ?>
    </div>
</body>

</html>