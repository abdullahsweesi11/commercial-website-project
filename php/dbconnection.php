<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "root";
            $db = "myDB";
            
            $conn = mysqli_connect($servername, $username, $password, $db);
            
            if (!$conn)
                die("connection failed: " . mysqli_connect_error());
            echo ("All good.");

        ?>
    </body>
</html>


<!-- include("connectDatabase.php") to connect automatically on another page-->

