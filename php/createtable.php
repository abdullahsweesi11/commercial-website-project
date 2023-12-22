<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include("dbconnection.php");

        $sql = "CREATE TABLE requests (
            requestId int unsigned auto_increment primary key,
            fullName VARCHAR(30) not null,
            email VARCHAR(255) not null,
            mobileNumber VARCHAR(15),
            education VARCHAR(30) not null,
            nationality VARCHAR(30) not null,
            residence VARCHAR(30) not null
        )";
          
        if ($conn->query($sql))
            echo("Table created successfully");
        else
            echo("Error: " . $conn->error);
    ?>
</body>
</html>